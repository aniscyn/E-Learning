<?php

namespace App\Http\Controllers\Admin;
use App\Models\Guru;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\MataPelajaran;
use App\Http\Controllers\Controller;

class DataMateriController extends Controller
{
    public function viewDataMapel()
    {

        $dataMateri = Materi::query()
        ->orderBy('nm_materi', 'asc')
        ->Paginate(5);

        return view('/admin/data-materi', [
            'data' => $dataMateri,
        ]);
    }

    public function viewTambah()
    {
        $dataKelas = Kelas::all();
        $dataMapel = MataPelajaran::all();
        $dataGuru = Guru::all();

        return view('/admin/tambah-materi', [
            'dataKelas' => $dataKelas,
            'dataMapel' => $dataMapel,
            'dataGuru' => $dataGuru,
        ]);
    }

    public function postTambah()
    {
        $request = request()->all();
        $user = Materi::create([
            'id_guru' => $request['guru'],
            'id_kelas' => $request['kelas'],
            'id_mapel' => $request['mapel'],
            'nm_materi' => $request['nm_materi'],
            'js_materi' => $request['js_materi'],
            'rs_materi' => $request['rs_materi'],
            'keterangan' => $request['keterangan'],
        ]);

        return redirect('/admin/data-materi');
    }

    public function viewEdit(Materi $materi)
    {
        $dataKelas = Kelas::all();
        $dataMapel = MataPelajaran::all();
        $dataGuru = Guru::all();

        return view('admin/ubah-materi', [
            'dataKelas' => $dataKelas,
            'dataMapel' => $dataMapel,
            'dataGuru' => $dataGuru,
        ]);
    }

    public function postEdit(Materi $materi)
    {
        $request = request()->all();
        $materi ->id_guru = request()->get('guru');
        $materi ->id_kelas = request()->get('kelas');
        $materi ->id_mapel = request()->get('mapel');
        $materi ->nm_materi = request()->get('nm_materi');
        $materi ->js_materi = request()->get('js_materi');
        $materi ->rs_materi = request()->get('rs_materi');
        $materi ->keterangan = request()->get('keterangan');

        $materi->save();

        return redirect('/admin/data-materi');
    }

    public function postDelete(Materi $materi)
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
