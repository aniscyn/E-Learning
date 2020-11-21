<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\User;

class DataJadwalController extends Controller
{
    public function viewDataJadwal()
    {
        $dataJadwal = Jadwal::query()
        ->orderBy('nm_lengkap', 'asc')
        ->Paginate(5);

        return view('admin/data-jadwal', [
            'data' => $dataJadwal,
        ]);
    }

    public function viewTambah()
    {
        return view('admin/tambah-jadwal');
    }

    public function postTambah()
    {
        $request = request()->all();

        $user = Jadwal::create([
            'nm_lengkap' => $request['nm_lengkap'],
            'nip' => $request['nip'],
            'nm_kelas' => $request['nm_kelas'],
            'jurusan' => $request['jurusan'],
            'nm_mapel' => $request['nm_mapel'],
            'nama_hari' => $request['nama_hari'],
            'jm_mulai' => $request['jm_mulai'],
            'jm_selesai' => $request['jm_selesai'],
        ]);

        return redirect('/admin/data-jadwal');
    }

    public function viewEdit(Jadwal $jadwal)
    {
        return view('admin/ubah-jadwal', [
            'data' => $jadwal,
        ]);
    }

    public function postEdit(Jadwal $jadwal)
    {
        $request = request()->all();
        $jadwal ->nm_lengkap = request()->get('nm_lengkap');
        $jadwal ->nip = request()->get('nip');
        $jadwal ->nm_kelas = request()->get('nm_kelas');
        $jadwal ->jurusan = request()->get('jurusan');
        $jadwal ->nm_mapel = request()->get('nm_mapel');
        $jadwal ->nama_hari = request()->get('nama_hari');
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
