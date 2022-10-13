<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function Login()
    {   
        return view('Auth.login');
    }

    public function PostLogin(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/beranda');
        }

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
