<?php
namespace App\Http\Controllers\Guru;

use App\Models\Jadwal;
use App\Http\Controllers\Controller;
use App\Models\Materi;

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

        $materi = Materi::create([
            'nm_materi' => $request['nm_materi'],
            'js_materi' => $request['js_materi'],
            'rs_materi' => $request['rs_materi'],
            'keterangan'  => $request['keterangan'],
            'id_jadwal' => $jadwal->id_jadwal,
            'upload_materi' => 'file upload dummy'
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

        return back();
    }
}
