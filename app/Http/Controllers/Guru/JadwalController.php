<?php
namespace App\Http\Controllers\Guru;

use App\Models\Jadwal;
use App\Http\Controllers\Controller;

class JadwalController extends Controller
{

    public function viewJadwal()
    {
        $me = auth()->user();

        $jadwal = Jadwal::query()
        ->where('id_guru', $me->id)
        ->get();

        $jadwal = $jadwal->sortBy(function($item) {
            return $item->urutan_hari;
        })->groupBy('nama_hari');

        return view('guru/jadwal-guru', [
            'jadwal' => $jadwal,
        ]);
    }
}
