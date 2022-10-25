<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $title = 'Masuk';
        return view('auth.login', compact('title'));
    }

    public function register()
    {
        $title = 'Registrasi';
        return view('auth.register', compact('title'));
    }

    public function forgotPassword()
    {
        $title = 'Lupa Kata Sandi';
        return view('auth.forgot-password', compact('title'));
    }

    public function reset()
    {
        $title = 'Atur ulang kata sandi';
        return view('auth.reset', compact('title'));
    }
}
