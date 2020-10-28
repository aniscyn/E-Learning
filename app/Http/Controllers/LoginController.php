<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function processLogin()
    {
        $auth = Auth::attempt([
            'username' => request()->get('username'),
            'password' => request()->get('password'),
            'role' => 'siswa',
        ]);

        if (! $auth) {
            return back()->withErrors(["NIS dan Kata sandi tidak sesuai"]);
        }

        return redirect('/siswa');
    }

    public function processLogout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
