<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        $guru = auth()->user();
        $dataSiswa = null;
        $dataKelas = Jadwal::query()
        ->where('id_guru', $guru->id)
        ->pluck('id_kelas')
        ->unique()
        ->map(function ($item, $key) {
            return Kelas::find($item);
        });

        if (request()->has('kelas')) {
            $kelasPilihan = request()->get('kelas');

            $dataSiswa = Siswa::query()
            ->where('kelas_id', $kelasPilihan)
            ->get();
        }

        return view('guru.absen-index', [
            'dataKelas' => $dataKelas,
            'dataSiswa' => $dataSiswa,
        ]);
    }
}
