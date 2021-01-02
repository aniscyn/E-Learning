<?php
namespace App\Http\Controllers\Guru;

use App\Models\Soal;
use App\Models\Jadwal;
use App\Models\DetailSoal;
use App\Http\Controllers\Controller;

class DetailSoalController extends Controller
{

    public function viewDetailSoal(Jadwal $jadwal, Soal $soal)
    {
        $data = DetailSoal::query()
        ->where('id_soal', $soal->id_soal)
        ->paginate(5);

        return view('guru/view-detail-soal', [
            'dataSoal' => $data,
            'jadwal' => $jadwal,
            'soal' => $soal,
        ]);
    }

    public function viewTambah(Jadwal $jadwal, Soal $soal)
    {
        $tipeSoal = request()->get('tipe_soal');

        if ($tipeSoal == 'pg') {
            return view('guru.tambah-soal-pg', [
                'jadwal' => $jadwal,
                'soal' => $soal,
            ]);
        }
        else {
            return view('guru.tambah-soal-essay', [
                'jadwal' => $jadwal,
                'soal' => $soal,
            ]);
        }
    }

    public function postTambah(Jadwal $jadwal, Soal $soal)
    {
        $tipeSoal = strtolower(request()->get('tipe_soal'));

        if ($tipeSoal == 'pg') {
            DetailSoal::create([
                'pertanyaan' => request()->get('pertanyaan'),
                'type' => 'PG',
                'id_soal' => $soal->id_soal,
                'pilihan_a' => request()->get('pilihan-a'),
                'pilihan_b' => request()->get('pilihan-b'),
                'pilihan_c' => request()->get('pilihan-c'),
                'pilihan_d' => request()->get('pilihan-d'),
                'jawaban_pilihan' => request()->get('jawaban_benar'),
            ]);
        }
        else {
            DetailSoal::create([
                'pertanyaan' => request()->get('pertanyaan'),
                'type' => 'ESSAY',
                'id_soal' => $soal->id_soal,
            ]);
        }

        $soal->refreshJumlahSoal();

        return redirect("/guru/jadwal/{$jadwal->id_jadwal}/soal/{$soal->id_soal}/detail");
    }

    public function viewEdit(Jadwal $jadwal, Soal $soal, DetailSoal $detail)
    {

    }

    public function postEdit(Jadwal $jadwal, Soal $soal, DetailSoal $detail)
    {

    }

    public function postHapus(Jadwal $jadwal, Soal $soal, DetailSoal $detail)
    {

    }
}
