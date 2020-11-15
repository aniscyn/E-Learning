<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\User;

class DataKelasController extends Controller
{
    public function viewDataKelas()
    {
        $dataKelas = Kelas::query()
        ->orderBy('nm_kelas', 'asc')
        ->orderBy('jurusan', 'asc')
        ->Paginate(5);

        return view('admin/data-kelas', [
            'data' => $dataKelas,
        ]);
    }

    public function viewTambah()
    {
        return view('admin/tambah-kelas');
    }

    public function postTambah()
    {
        $request = request()->all();

        $user = Kelas::create([
            'nm_kelas' => $request['nm_kelas'],
            'jurusan' => $request['jurusan'],
        ]);

        return redirect('/admin/data-kelas');
    }

    public function viewEdit(Kelas $kelas)
    {
        return view('admin/ubah-kelas', [
            'data' => $kelas,
        ]);
    }

    public function postEdit(Kelas $kelas)
    {
        $request = request()->all();
        $kelas ->nm_kelas = request()->get('nm_kelas');
        $kelas ->jurusan = request()->get('jurusan');

        $kelas->save();

        return redirect('/admin/data-kelas');
    }

    public function postDelete(Kelas $kelas)
    {
        $kelas->delete();
        if($kelas){
            //redirect dengan pesan sukses
            return back()->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return back()->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
