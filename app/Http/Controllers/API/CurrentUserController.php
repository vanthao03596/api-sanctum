<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class CurrentUserController
{
    public function __invoke(Request $request)
    {
        $user = $request->user()->load('roles', 'permissions');

        return new UserResource($user);
    }
}

