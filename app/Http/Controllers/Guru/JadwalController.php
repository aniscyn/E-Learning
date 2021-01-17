<?php
namespace App\Http\Controllers\Guru;

use App\Models\Jadwal;
use App\Models\Materi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{

    public function viewJadwal()
    {
        $me = auth()->user();

        $jadwal = Jadwal::query()
        ->where('id_guru', $me->id)
        ->get();

        $jadwal = $jadwal->sortBy(function($item) {
            return $item->urutan_hari;
        })->groupBy('nama_hari');

        return view('guru/jadwal-guru', [
            'jadwal' => $jadwal,
        ]);
    }

    public function viewMateri(Jadwal $jadwal)
    {
        $materi = Materi::query()
        ->where('id_jadwal', $jadwal->id_jadwal)
        ->paginate(5);

        return view('guru/materi', [
            'jadwal' => $jadwal,
            'dataMateri' => $materi,
        ]);
    }

    public function viewTambahMateri(Jadwal $jadwal)
    {
        return view('guru/tambah-materi', [
            'jadwal' => $jadwal,
        ]);
    }

    public function postTambahMateri(Jadwal $jadwal)
    {
        $request = request()->all();

        //Uplaod
        if (request()->has('upload_materi')) {
            $path = request()->file('upload_materi')->store('public/materi');
        }

        $materi = Materi::create([
            'nm_materi' => $request['nm_materi'],
            'js_materi' => $request['js_materi'],
            'rs_materi' => $request['rs_materi'],
            'keterangan'  => $request['keterangan'],
            'id_jadwal' => $jadwal->id_jadwal,
            'upload_materi' => $path,
            'tanggal' => now(),
        ]);

        return redirect("/guru/jadwal/{$jadwal->id_jadwal}/materi");
    }

    public function viewEditMateri(Jadwal $jadwal, Materi $materi)
    {
        return view('guru/ubah-materi', [
            'jadwal' => $jadwal,
            'materi' => $materi,
        ]);
    }

    public function postEditMateri(Jadwal $jadwal, Materi $materi)
    {
        $request = request()->all();

        //Uplaod
        if (request()->has('upload_materi')) {
            if  ($materi->upload_materi) {
                Storage::delete($materi->upload_materi);
            }

            $path = request()->file('upload_materi')->store('public/materi');
            $materi->upload_materi = $path;
        }

        $materi->nm_materi  = $request['nm_materi'];
        $materi->js_materi  = $request['js_materi'];
        $materi->rs_materi  = $request['rs_materi'];
        $materi->keterangan  = $request['keterangan'];
        $materi->save();

        return redirect("/guru/jadwal/{$jadwal->id_jadwal}/materi");
    }

    public function postHapusMateri(Jadwal $jadwal, Materi $materi)
    {
        $materi->delete();
        if($materi){
            if  ($materi->upload_materi) {
                Storage::delete($materi->upload_materi);
            }

            //redirect dengan pesan sukses
            return back()->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return back()->with(['error' => 'Data Gagal Dihapus!']);
         }
        return back();
    }
}
