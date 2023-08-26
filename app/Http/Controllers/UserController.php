<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\login as AuthLogin;
use App\Http\Requests\Auth\register;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('auth.Register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function store(register $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            return redirect()->route('user.login')->with('message', 'You are register sucessfully, please login your account');
        }
    }

    public function postLogin(AuthLogin $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('listing')->with('message', 'Sucessfully login');
        } else {
            return redirect()->back()->with('message', 'Something went to wrong, please check credentials.');
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }
}
