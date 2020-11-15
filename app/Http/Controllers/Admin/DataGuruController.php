<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\User;

class DataGuruController extends Controller
{
    public function viewDataGuru()
    {
        $dataGuru = Guru::query()
        ->orderBy('nm_lengkap', 'asc')
        ->Paginate(5);

        return view('admin/data-guru', [
            'data' => $dataGuru,
        ]);
    }

    public function viewTambah()
    {
        return view('admin/tambah-guru');
    }

    public function postTambah()
    {
        $request = request()->all();

        $user = User::create([
            'password' => bcrypt($request['password']),
            'role' => 'guru',
            'username' => $request['nip'],
        ]);

        $guru = Guru::create([
            'nip' => $request['nip'],
            'nm_lengkap' => $request['nm_lengkap'],
            'tgl_lahir' => $request['tgl_lahir'],
            'jk' => $request['jk'],
            'alamat_guru' => $request['alamat_guru'],
            'email' => $request['email'],
            'tlp' => $request['tlp'],
            'user_id' => $user->id,
        ]);

        return redirect('/admin/data-guru');
    }

    public function viewEdit(Guru $guru)
    {
        return view('admin/ubah-guru', [
            'data' => $guru,
        ]);
    }

    public function postEdit(Guru $guru)
    {
        $request = request()->all();
        $guru->nip = $request['nip'];
        $guru->nm_lengkap =$request['nm_lengkap'];
        $guru->tgl_lahir = $request['tgl_lahir'];
        $guru->jk =$request['jk'];
        $guru->alamat_guru =$request['alamat_guru'];
        $guru->email = $request['email'];
        $guru->tlp = $request['tlp'];

        $guru->save();

        return redirect('/admin/data-guru');
    }

    public function postDelete(Guru $guru)
    {
        $guru->delete();
        if($guru){
            //redirect dengan pesan sukses
            return back()->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return back()->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
