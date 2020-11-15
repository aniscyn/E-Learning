<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Siswa;
use App\Http\Controllers\Controller;
use App\Models\Kelas;

class DataSiswaController extends Controller
{
    public function viewDataSiswa()
    {
        $dataSiswa = Siswa::query()
        ->orderBy('nm_lengkap', 'asc')
        ->Paginate(5);

        return view('admin/data-siswa', [
            'data' => $dataSiswa,
        ]);
    }

    public function viewTambah()
    {
        $dataKelas = Kelas::all();

        return view('admin/tambah-siswa', [
            'dataKelas' => $dataKelas,
        ]);
    }

    public function postTambah()
    {
        $request = request()->all();

        $user = User::create([
            'password' => bcrypt($request['password']),
            'role' => 'siswa',
            'username' => $request['nis'],
        ]);

        $siswa = Siswa::create([
            'nis' => $request['nis'],
            'nm_lengkap' => $request['nm_lengkap'],
            'tgl_lahir' => $request['tgl_lahir'],
            'jk' => $request['jk'],
            'alamat_siswa' => $request['alamat_siswa'],
            'email' => $request['email'],
            'tlp' => $request['tlp'],
            'user_id' => $user->id,
            'kelas_id' => $request['kelas'],
        ]);

        return redirect('/admin/data-siswa');
    }

    public function viewEdit(Siswa $siswa)
    {
        return view('admin/ubah-siswa', [
            'data' => $siswa,
        ]);
    }

    public function postEdit(Siswa $siswa)
    {
        $request = request()->all();
        $siswa->nis = $request['nis'];
        $siswa->nm_lengkap =$request['nm_lengkap'];
        $siswa->tgl_lahir = $request['tgl_lahir'];
        $siswa->jk =$request['jk'];
        $siswa->alamat_siswa =$request['alamat_siswa'];
        $siswa->email = $request['email'];
        $siswa->tlp = $request['tlp'];

        $siswa->save();

        return redirect('/admin/data-siswa');
    }

    public function postDelete(Siswa $siswa)
    {
        $siswa->delete();
        if($siswa){
            //redirect dengan pesan sukses
            return back()->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return back()->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
