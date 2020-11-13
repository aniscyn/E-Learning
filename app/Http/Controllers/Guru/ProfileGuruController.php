<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileGuruController extends Controller
{
    public function viewProfile()
    {
        $me = auth()->user();

        return view('guru/profile-guru', [
            'user' => $me,
        ]);
    }

    public function viewEdit() {
        $me = auth()->user();

        return view('guru/ubahprofile-guru', [
            'user' => $me,
        ]);
    }

    public function postEdit(User $user)
    {
        $guru = $user->guru;

        $guru ->nm_lengkap = request()->get('nm_guru');
        $guru ->tgl_lahir = request()->get('tgl_lahir');
        $guru ->email = request()->get('email_guru');
        $guru ->alamat_guru = request()->get('alamat_guru');
        $guru ->tlp = request()->get('tlp_guru');
        $guru ->save();

        return back();
    }
}
