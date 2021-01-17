<?php

namespace App\Http\Controllers\Guru;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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

        //Uplaod
        if (request()->has('profile_photo')) {
            if  ($guru->profile_photo) {
                Storage::delete($guru->profile_photo);
            }

            $path = request()->file('profile_photo')->store('public/profile_photos');
            $guru->profile_photo = $path;
        }

        $guru ->save();

        return back();
    }
}
