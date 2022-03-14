<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function user(Request $request)
    {
        $this->authorize('1');

        return $request->user();
    }

    public function login(Request $request)
    {
        $response = $this->userService->login($request);

        return $response;
    }

    public function register(Request $request)
    {
        $response = $this->userService->register($request);

        return $response;
    }

    public function logout(Request $request)
    {
        $response = $this->userService->logout($request);

        return $response;
    }
}
