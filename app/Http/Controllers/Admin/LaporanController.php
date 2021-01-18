<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporanJadwal()
    {
        $dataJadwal = Jadwal::query()
        ->get();

        return view('admin.laporan-jadwal', [
            'dataJadwal' => $dataJadwal,
        ]);
    }
}
