<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;

class DataKelasController extends Controller
{
    public function viewDataKelas()
    {
        $dataKelas = User::query()
        ->where('role', 'kelas')
        ->get();

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

        $user = User::create([
            'nm_kelas' => $request['nm_kelas'],
            'jurusan' => $request['jurusan'],
            'role' => 'admin',
        ]);

        return redirect('/admin/data-kelas');
    }

    public function viewEdit(User $user)
    {
        return view('admin/ubah-kelas', [
            'data' => $user,
        ]);
    }

    public function postEdit(User $user)
    {
        $request = request()->all();
        $user->username = $request['username'];
        $user ->nm_kelas = request()->get('nm_kelas');
        $user ->jurusan = request()->get('jurusan');

        $user->save();

        return redirect('/admin/data-kelas');
    }

    public function postDelete(User $user)
    {
        $user->delete();

        return back();
    }
}
