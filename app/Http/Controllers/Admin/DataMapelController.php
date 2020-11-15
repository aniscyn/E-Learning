<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\MataPelajaran;
use App\Models\User;

class DataMapelController extends Controller
{
    public function viewDataMapel()
    {

        $dataMapel = MataPelajaran::query()
        ->orderBy('nm_mapel', 'asc')
        ->Paginate(5);

        return view('/admin/data-mapel', [
            'data' => $dataMapel,
        ]);
    }

    public function viewTambah()
    {
        return view('/admin/tambah-mapel');
    }

    public function postTambah()
    {
        $request = request()->all();

        $user = MataPelajaran::create([
            'nm_mapel' => $request['nm_mapel'],
        ]);

        return redirect('/admin/data-mapel');
    }

    public function viewEdit(MataPelajaran $mapel)
    {
        return view('admin/ubah-mapel', [
            'data' => $mapel,
        ]);
    }

    public function postEdit(MataPelajaran $mapel)
    {
        $request = request()->all();
        $mapel ->nm_mapel = request()->get('nm_mapel');

        $mapel->save();

        return redirect('/admin/data-mapel');
    }

    public function postDelete(MataPelajaran $mapel)
    {
        $mapel->delete();
        if($mapel){
            //redirect dengan pesan sukses
            return back()->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return back()->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}

