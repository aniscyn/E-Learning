<?php

namespace App\Http\Controllers\Admin;
use App\Models\Guru;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Jadwal;
use App\Models\MataPelajaran;
use App\Http\Controllers\Controller;

class DataJadwalController extends Controller
{
    public function viewDataJadwal()
    {
        $dataJadwal = Jadwal::query()
        ->whereHas('userGuru.guru', function ($query) {
            $query->orderBy('nm_lengkap', 'asc');
        })
        ->Paginate(5);

        return view('admin/data-jadwal', [
            'data' => $dataJadwal,
        ]);
    }

    public function viewTambah()
    {
        $dataKelas = Kelas::all();
        $dataMapel = MataPelajaran::all();
        $dataGuru = Guru::all();
        $dataHari = Jadwal::getListHari();

        return view('admin/tambah-jadwal', [
            'dataKelas' => $dataKelas,
            'dataMapel' => $dataMapel,
            'dataGuru' => $dataGuru,
            'dataHari' => $dataHari,
        ]);
    }

    public function postTambah()
    {
        $request = request()->all();
        $hari = Jadwal::getHari($request['hari']);

        $user = Jadwal::create([
            'id_guru' => $request['guru'],
            'id_kelas' => $request['kelas'],
            'id_mapel' => $request['mapel'],
            'nama_hari' => $hari['nama'],
            'urutan_hari' => $hari['urutan'],
            'jm_mulai' => $request['jm_mulai'],
            'jm_selesai' => $request['jm_selesai'],
        ]);

        return redirect('/admin/data-jadwal');
    }

    public function viewEdit(Jadwal $jadwal)
    {
        $dataKelas = Kelas::all();
        $dataMapel = MataPelajaran::all();
        $dataGuru = Guru::all();
        $dataHari = Jadwal::getListHari();

        return view('admin/ubah-jadwal', [
            'dataKelas' => $dataKelas,
            'dataMapel' => $dataMapel,
            'dataGuru' => $dataGuru,
            'dataHari' => $dataHari,
            'jadwal' => $jadwal,
        ]);
    }

    public function postEdit(Jadwal $jadwal)
    {
        $request = request()->all();
        $hari = Jadwal::getHari($request['hari']);
        $jadwal ->id_guru = request()->get('guru');
        $jadwal ->id_kelas = request()->get('kelas');
        $jadwal ->id_mapel = request()->get('mapel');
        $jadwal ->nama_hari = $hari['nama'];
        $jadwal ->urutan_hari = $hari['urutan'];
        $jadwal ->jm_mulai = request()->get('jm_mulai');
        $jadwal ->jm_selesai = request()->get('jm_selesai');
        $jadwal->save();

        return redirect('/admin/data-jadwal');
    }

    public function postDelete(Jadwal $jadwal)
    {
        $jadwal->delete();
        if($jadwal){
            //redirect dengan pesan sukses
            return back()->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return back()->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
