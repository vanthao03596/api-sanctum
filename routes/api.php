<?php

use App\Http\Controllers\API\CurrentUserController;
use App\Http\Controllers\API\PermissionController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\SanctumTokenController;
use App\Http\Controllers\API\UserController;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('sanctum/token', [SanctumTokenController::class, 'store']);

Route::middleware('auth:sanctum')
    ->group(function () {
        Route::get('/me', CurrentUserController::class);
        Route::apiResource('users', UserController::class);
        Route::apiResource('roles', RoleController::class);
        Route::apiResource('permissions', PermissionController::class);
    });
