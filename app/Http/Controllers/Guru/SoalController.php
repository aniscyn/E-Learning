<?php
namespace App\Http\Controllers\Guru;

use App\Models\Soal;
use App\Models\Jadwal;
use App\Models\Materi;
use App\Http\Controllers\Controller;

class SoalController extends Controller
{
    public function viewSoal(Jadwal $jadwal, Materi $materi)
    {
        $soal = Soal::query()
        ->where('id_materi', $materi->id_materi)
        ->paginate(5);

        return view('guru/view-soal', [
            'jadwal' => $jadwal,
            'materi' => $materi,
            'dataSoal' => $soal,
        ]);
    }

    public function viewTambahSoal(Jadwal $jadwal, Materi $materi)
    {
        return view('guru/tambah-soal', [
            'jadwal' => $jadwal,
            'materi' => $materi,
        ]);
    }

    public function postTambahSoal(Jadwal $jadwal, Materi $materi)
    {
        $jumlahSoal = Soal::query()
        ->where('id_materi', $materi->id_materi)
        ->count();

        if ($jumlahSoal <= 0) {
            Soal::create([
                'nama_soal' => "UTS",
                'jumlah_soal' => 0,
                'id_materi' => $materi->id_materi,
                'is_uts' => 1,
            ]);
            Soal::create([
                'nama_soal' => "UAS",
                'jumlah_soal' => 0,
                'id_materi' => $materi->id_materi,
                'is_uas' => 1,
            ]);
        }

        $soal = Soal::create([
            'nama_soal' => request()->get('nama_soal'),
            'jumlah_soal' => 0,
            'id_materi' => $materi->id_materi
        ]);

        return redirect("/guru/jadwal/{$jadwal->id_jadwal}/materi/{$materi->id_materi}/soal");
    }

    public function viewEditSoal(Jadwal $jadwal, Materi $materi, Soal $soal)
    {
        return view('guru/ubah-soal', [
            'jadwal' => $jadwal,
            'materi' => $materi,
            'soal' => $soal,
        ]);
    }

    public function postEditSoal(Jadwal $jadwal, Materi $materi, Soal $soal)
    {
        $soal->nama_soal = request()->get('nama_soal');
        $soal->save();

        return redirect("/guru/jadwal/{$jadwal->id_jadwal}/materi/{$materi->id_materi}/soal");
    }

    public function postHapusSoal(Jadwal $jadwal, Materi $materi, Soal $soal)
    {
        if($soal->delete()){
            //redirect dengan pesan sukses
            return back()->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return back()->with(['error' => 'Data Gagal Dihapus!']);
         }
        return back();
    }
}
