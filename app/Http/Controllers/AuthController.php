<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use session;

class AuthController extends Controller
{
    // public function Login()
    // {   
    //     return view('Auth.login');
    // }

    public function PostLogin(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/beranda');
        }

        return redirect('/login')->with('error','Email atau Password anda salah !!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
