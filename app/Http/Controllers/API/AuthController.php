<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\UserLoginRequest;
use Illuminate\Validation\ValidationException;

/**
 * @group 1. Authentication
 */
class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }


    /**
     * Log a user in
     *
     * Application uses [JSON Web Tokens](https://jwt.io/) (JWT) for authentication.
     * After the user has been authenticated, a random "token" will be returned.
     * This token should then be saved in a local storage and used as an `Authorization: Bearer` header
     * for consecutive calls.
     *
     * Notice: The token is valid for a week, after that the user will need to log in again.
     *
     * @bodyParam email string required The user's email. Example: john@doe.com
     * @bodyParam password string required The password. Example: SoSecureMuchW0w
     *
     * @response {
     *   "token": "<a-random-string>",
     *   "token_type": "bearer",
     *   "expires_in": "3600"
     * }
     * @reponse 401 {
     *   "message": "Invalid credentials"
     * }
     */
    public function login(UserLoginRequest $request): JsonResponse
    {
        $credentials = $request->only(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ]);
        }

        return $this->respondWithToken($token);
    }


    /**
     * Log the current user out
     */
    public function logout(): Response
    {
        auth()->logout();

        return response()->noContent();
    }

    /**
     * Refresh a token.
     */
    public function refresh(): JsonResponse
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     */
    protected function respondWithToken(string $token): JsonResponse
    {
        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
