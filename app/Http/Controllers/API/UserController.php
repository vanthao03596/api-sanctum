<?php

namespace App\Http\Controllers\API;

use App\Filters\FuzzyFilter;
use App\Http\Requests\API\StoreUserRequest;
use App\Http\Requests\API\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group  User management
 * @authenticated
 * APIs for managing users
 */
class UserController
{
    /**
     * @queryParam  include optional The id of the location. Example: roles,permissions
     * @queryParam  filter[search] optional The text you want to search. No-example
     * @queryParam  filter[roles] optional string The roles you want to search. Example: writer,super-admin
     * @queryParam  page required The page int number. Example: 1
     * @queryParam  limit required The per page number. Example: 20
     * @queryParam  sort required The sort field. Example: id
     */
    public function index()
    {
        $users = QueryBuilder::for(User::class)
                ->allowedIncludes(['roles', 'permissions'])
                ->allowedFilters(array(
                    AllowedFilter::callback('roles', function ($query, $values) {
                        $query->whereHas('roles', function ($q) use ($values){
                            $q->whereIn('name', Arr::wrap($values));
                        });
                    }),
                    AllowedFilter::custom('search', new FuzzyFilter(
                        'name',
                        'email'
                    )),
                ))
                ->allowedSorts('email', 'name', 'id', 'created_at')
                ->paginate(request('limit'))
                ->appends(request()->query());

        return UserResource::collection($users);
    }

    public function store(StoreUserRequest $request)
    {
        $user = new User;
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();
        $user->givePermissionTo($request->input('direct_permissions'));
        $user->assignRole($request->input('roles'));

        return new UserResource($user->load('roles', 'permissions'));

    }

    public function show($id)
    {
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();

        $user->syncRoles($request->input('roles'));
        $user->syncPermissions($request->input('direct_permissions'));

        return new UserResource($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->noContent();
    }
}
