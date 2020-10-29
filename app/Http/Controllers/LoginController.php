<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function processLogin()
    {

        $auth = Auth::attempt([
            'username' => request()->get('username'),
            'password' => request()->get('password'),
        ]);

        if (!$auth) {
            return back()->withErrors(["Username dan Kata sandi tidak sesuai"]);
        }

        /**
         * @var User
         */
        $userLoggedIn = auth()->user();

        if ($userLoggedIn->isRoleSiswa()) {
            return redirect('/siswa');
        }
        else {
            return redirect('/guru');
        }

    }

    public function processLogout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
