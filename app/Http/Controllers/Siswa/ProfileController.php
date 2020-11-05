<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;

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
}
