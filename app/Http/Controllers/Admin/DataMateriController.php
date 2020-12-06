<?php

namespace App\Http\Controllers\Admin;
use App\Models\Guru;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\MataPelajaran;
use App\Http\Controllers\Controller;
use App\Models\Jadwal;

class DataMateriController extends Controller
{
    public function viewDataMateri(Jadwal $jadwal)
    {

        $dataMateri = Materi::query()
        ->orderBy('nm_materi', 'asc')
        ->Paginate(5);

        return view('/admin/data-materi', [
            'data' => $dataMateri,
            'jadwal' => $jadwal,
        ]);
    }

    public function viewTambah(Jadwal $jadwal)
    {
        $dataKelas = Kelas::all();
        $dataMapel = MataPelajaran::all();
        $dataGuru = Guru::all();

        return view('/admin/tambah-materi', [
            'dataKelas' => $dataKelas,
            'dataMapel' => $dataMapel,
            'dataGuru' => $dataGuru,
            'jadwal' => $jadwal,
        ]);
    }

    public function postTambah(Jadwal $jadwal)
    {
        $request = request()->all();
        $user = Materi::create([
            'id_jadwal' => $jadwal->id_jadwal,
            'nm_materi' => $request['nm_materi'],
            'js_materi' => $request['js_materi'],
            'rs_materi' => $request['rs_materi'],
            'keterangan' => $request['keterangan'],
            'upload_materi' => 'dummy data',
        ]);

        return redirect("/admin/data-jadwal/{$jadwal->id_jadwal}/data-materi");
    }

    public function viewEdit(Jadwal $jadwal, Materi $materi)
    {
        $dataKelas = Kelas::all();
        $dataMapel = MataPelajaran::all();
        $dataGuru = Guru::all();

        return view('admin/ubah-materi', [
            'dataKelas' => $dataKelas,
            'dataMapel' => $dataMapel,
            'dataGuru' => $dataGuru,
            'jadwal' => $jadwal,
            'materi' => $materi,
        ]);
    }

    public function postEdit(Jadwal $jadwal, Materi $materi)
    {
        $request = request()->all();
        $materi ->nm_materi = request()->get('nm_materi');
        $materi ->js_materi = request()->get('js_materi');
        $materi ->rs_materi = request()->get('rs_materi');
        $materi ->keterangan = request()->get('keterangan');

        $materi->save();

        return redirect("/admin/data-jadwal/{$jadwal->id_jadwal}/data-materi");
    }

    public function postDelete(Jadwal $jadwal, Materi $materi)
    {
        $materi->delete();
        if($materi){
            //redirect dengan pesan sukses
            return back()->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return back()->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
