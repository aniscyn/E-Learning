<?php
namespace App\Http\Controllers\Guru;

use App\Models\Soal;
use App\Models\Jadwal;
use App\Models\Materi;
use App\Http\Controllers\Controller;

class SoalController extends Controller
{
    public function viewSoal(Jadwal $jadwal)
    {
        $soal = Soal::query()
        ->get();

        return view('guru/view-soal', [
            'jadwal' => $jadwal,
            'dataSoal' => $soal,
        ]);
    }

    public function viewTambahSoal(Jadwal $jadwal)
    {
        $dataMateri = $jadwal->materi;

        return view('guru/tambah-soal', [
            'jadwal' => $jadwal,
            'dataMateri' => $dataMateri,
        ]);
    }

    public function postTambahSoal(Jadwal $jadwal)
    {

        $soal = Soal::create([
            'nama_soal' => request()->get('nama_soal'),
            'jumlah_soal' => 0,
            'id_materi' => request()->get('id_materi'),
        ]);

        return redirect("/guru/jadwal/{$jadwal->id_jadwal}/soal");
    }
}
