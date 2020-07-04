<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\RoleResource;
use App\Role;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class RoleController
{
    public function index()
    {
        $roles = QueryBuilder::for(Role::class)
                ->allowedIncludes(['permissions'])
                ->get();

        return RoleResource::collection($roles);
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
