<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Absen;
use App\Models\User;

class AbsenController extends Controller
{
    public function viewAbsen()
    {
        $me = auth()->user();

        $absenHariIni = Absen::query()
        ->whereDate('tanggal_absen', now())
        ->first();

        if (!$absenHariIni) {
            $absenHariIni = Absen::create([
                'tanggal_absen' => now(),
                'id_user' => $me->id,
                'tipe' => 'siswa',
            ]);
        }


        return view('siswa/absen-siswa', [
            'absen' => $absenHariIni,
        ]);
    }

    public function postAbsenMasuk(Absen $absen)
    {
        $absen->jm_masuk = now();
        $absen->save();

        return back();
    }

    public function postAbsenKeluar(Absen $absen)
    {
        $absen->jm_keluar = now();
        $absen->save();

        return back();
    }
}
