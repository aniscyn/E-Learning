<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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

        //Uplaod
        if (request()->has('profile_photo')) {
            if  ($siswa->profile_photo) {
                Storage::delete($siswa->profile_photo);
            }

            $path = request()->file('profile_photo')->store('public/profile_photos');
            $siswa->profile_photo = $path;
        }

        $siswa->save();

        return back();
    }
}
