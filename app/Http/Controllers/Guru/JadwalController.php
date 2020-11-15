<?php
namespace App\Http\Controllers\Guru;

use App\Models\Jadwal;
use App\Http\Controllers\Controller;
use App\Models\Materi;

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

    public function viewMateri(Jadwal $jadwal)
    {
        $materi = Materi::query()
        ->where('id_jadwal', $jadwal->id_jadwal)
        ->paginate(5);

        return view('guru/materi', [
            'jadwal' => $jadwal,
            'dataMateri' => $materi,
        ]);
    }
}
