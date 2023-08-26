<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\login;
use App\Http\Requests\Auth\register;
use App\Service\UserService;
use Illuminate\Http\Request;
use App\Http\Resources\User\resource as UserResource;

class UserController extends Controller
{

    private $service;

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    public function register(register $request)
    {
        $data = $this->service->register($request->all());
        return new UserResource($data);
    }

    public function logIn(login $request)
    {
        $data = $this->service->logIn($request->all());
        $response = [
            'user' => $data,
            'token' => $data->createToken("Api Token")->plainTextToken
        ];
        return $response;
    }
}
