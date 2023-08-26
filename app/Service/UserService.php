<?php

namespace App\Service;

use App\Http\Requests\Auth\login;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    private $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function register($requestArray)
    {
        $user = User::create([
            'name' => $requestArray['name'],
            'email' => $requestArray['email'],
            'password' => Hash::make($requestArray['password']),
        ]);

        return $user;
    }

    public function logIn($requestArray)
    {
        $user = User::where('email', $requestArray['email'])->first();
        if ($user != null) {
            return $user;
        } else {
            $message['message']['wrongCredentials'] = 'Something went to wrong, wrong credentials';
        }
    }
}
