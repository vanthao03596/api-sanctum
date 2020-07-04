<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\PermissionResource;
use App\Permission;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;


class PermissionController
{
    public function index()
    {
        $roles = QueryBuilder::for(Permission::class)
                ->allowedIncludes(['role'])
                ->get();

        return PermissionResource::collection($roles);
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
