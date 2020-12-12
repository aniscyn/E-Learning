<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\User;

class ProfileController extends Controller
{
    public function viewProfile()
    {
        $me = auth()->user();

        return view('siswa/profile-siswa', [
            'user' => $me,
        ]);
    }

    public function viewEdit() {
        $me = auth()->user();

        return view('siswa/ubahprofile-siswa', [
            'user' => $me,
        ]);
    }

    public function postEdit(User $user)
    {
        $siswa = $user->siswa;

        $siswa->nm_lengkap = request()->get('nm_lengkap');
        $siswa->tgl_lahir = request()->get('tgl_lahir');
        $siswa->email = request()->get('email');
        $siswa->alamat_siswa = request()->get('alamat');
        $siswa->tlp = request()->get('no_telp');
        $siswa->save();

        return back();
    }
}
