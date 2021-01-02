<?php
namespace App\Http\Controllers\Guru;

use App\Models\Soal;
use App\Models\Jadwal;
use App\Models\Materi;
use App\Http\Controllers\Controller;
use App\Models\DetailSoal;

class SoalController extends Controller
{
    public function viewSoal(Jadwal $jadwal)
    {
        $soal = Soal::query()
        ->whereHas('materi', function ($query) use ($jadwal) {
            $query->where('id_jadwal', $jadwal->id_jadwal);
        })
        ->paginate(5);

        return view('guru/view-soal', [
            'jadwal' => $jadwal,
            'dataSoal' => $soal,
        ]);
    }

    public function viewTambahSoal(Jadwal $jadwal)
    {
        $materi = $jadwal->materi;

        return view('guru/tambah-soal', [
            'jadwal' => $jadwal,
            'dataMateri' => $materi,
        ]);
    }

    public function postTambahSoal(Jadwal $jadwal)
    {
        $jumlahSoal = Soal::query()
        ->whereHas('materi', function ($query) use ($jadwal) {
            $query->where('id_jadwal', $jadwal->id_jadwal);
        })
        ->count();

        if ($jumlahSoal <= 0) {
            Soal::create([
                'nama_soal' => "UTS",
                'jumlah_soal' => 0,
                'id_materi' => request()->get('id_materi'),
                'is_uts' => 1,
            ]);
            Soal::create([
                'nama_soal' => "UAS",
                'jumlah_soal' => 0,
                'id_materi' => request()->get('id_materi'),
                'is_uas' => 1,
            ]);
        }

        $soal = Soal::create([
            'nama_soal' => request()->get('nama_soal'),
            'jumlah_soal' => 0,
            'id_materi' => request()->get('id_materi'),
        ]);

        return redirect("/guru/jadwal/{$jadwal->id_jadwal}/soal");
    }

    public function viewEditSoal(Jadwal $jadwal, Soal $soal)
    {
        return view('guru/ubah-soal', [
            'jadwal' => $jadwal,
            'soal' => $soal,
        ]);
    }

    public function postEditSoal(Jadwal $jadwal, Soal $soal)
    {
        $soal->nama_soal = request()->get('nama_soal');
        $soal->save();

        return redirect("/guru/jadwal/{$jadwal->id_jadwal}}/soal");
    }

    public function postHapusSoal(Jadwal $jadwal, Soal $soal)
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
