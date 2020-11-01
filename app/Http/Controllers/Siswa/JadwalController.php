<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function viewJadwal()
    {
        $me = auth()->user();

        $jadwal = Jadwal::query()
        ->where('id_kelas', $me->siswa->kelas_id)
        ->get();

        $jadwal = $jadwal->sortBy(function($item) {
            return $item->urutan_hari;
        })->groupBy('nama_hari');

        return view('siswa/jadwal-siswa', [
            'jadwal' => $jadwal,
        ]);
    }
}
