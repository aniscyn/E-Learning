<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function processLogin()
    {

        $auth = Auth::attempt([
            'username' => request()->get('username'),
            'password' => request()->get('password'),
            'role' => 'admin',
        ]);

        if (!$auth) {
            return back()->withErrors(["Username dan Kata Sandi Tidak Sesuai"]);
        }

        /**
         * @var User
         */
        $userLoggedIn = auth()->user();

        if ($userLoggedIn->isRoleAdmin()) {
            return redirect('/admin/beranda');
        }

    }

    public function processLogout()
    {
        Auth::logout();

        return redirect('/admin');
    }
}
