<?php

namespace App\Http\Controllers\Guru;

use App\Models\Soal;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PengerjaanSoal;

class NilaiController extends Controller
{
    public function index(Jadwal $jadwal, Soal $soal)
    {
        $pengerjaanSoal = PengerjaanSoal::query()
        ->where('id_soal', $soal->id_soal)
        ->get();

        return view('guru.index-nilai', [
            'dataPengerjaan' => $pengerjaanSoal,
        ]);
    }
}
