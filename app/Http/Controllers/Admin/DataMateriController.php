<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Materi;

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
        return view('/admin/tambah-materi');
    }

    public function postTambah()
    {
        $request = request()->all();

        $user = Materi::create([
            'nm_materi' => $request['nm_materi'],
        ]);

        return redirect('/admin/data-materi');
    }

    public function viewEdit(Materi $materi)
    {
        return view('admin/ubah-materi', [
            'data' => $materi,
        ]);
    }

    public function postEdit(Materi $materi)
    {
        $request = request()->all();
        $materi ->nm_materi = request()->get('nm_materi');

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
