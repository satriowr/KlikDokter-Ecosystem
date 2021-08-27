<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        // dd('Login berhasil');'
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return redirect('/');
        }

        if (Auth::attempt($request->only('email', 'password')))
        {
            return redirect('member');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function hcp(Request $request)
    {
        return redirect('/hcp');
    }

    public function komunitas(Request $request)
    {
        return redirect('/komunitas');
    }
}
