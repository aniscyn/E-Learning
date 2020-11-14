<?php
// yg dibawah ini disesuaiin sama urutan folder nya
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DataAdminController extends Controller
{

    public function viewDataAdmin()
    {
        $dataAdmin = User::query()
        ->where('role', 'admin')
        ->get();

        return view('admin/data-admin', [
            'data' => $dataAdmin,
        ]);
    }

    public function viewTambah()
    {
        return view('admin/tambah-admin');
    }

    public function postTambah()
    {
        $request = request()->all();

        $user = User::create([
            'username' => $request['username'],
            'password' => bcrypt($request['password']),
            'role' => 'admin',
        ]);

        return redirect('/admin/data-admin');
    }

    public function viewEdit(User $user)
    {
        return view('admin/ubah-admin', [
            'data' => $user,
        ]);
    }

    public function postEdit(User $user)
    {
        $request = request()->all();
        $user->username = $request['username'];

        if (!empty($request['password'])) {
            $user->password = bcrypt($request['password']);
        }

        $user->save();

        return redirect('/admin/data-admin');
    }

    public function postDelete(User $user)
    {
        $user->delete();
        if($user){
            //redirect dengan pesan sukses
            return back()->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return back()->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
