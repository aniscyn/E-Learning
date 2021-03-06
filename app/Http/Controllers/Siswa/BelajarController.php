<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Jadwal;
use App\Models\Materi;
use App\Http\Controllers\Controller;
use App\Models\DetailPengerjaanSoal;
use App\Models\DetailSoal;
use App\Models\PengerjaanSoal;
use App\Models\Soal;

class BelajarController extends Controller
{

    public function index(Jadwal $jadwal)
    {
        $dataMateri = $jadwal->materi()->orderBy('tanggal', 'ASC')->get();

        return view('siswa/belajar-siswa', [
            'jadwal' => $jadwal,
            'dataMateri' => $dataMateri
        ]);
    }

    public function latihanSoal(Jadwal $jadwal, Materi $materi) {
        $siswa = auth()->user();

        $soal = $materi->soal;

        $pengerjaanSoal = PengerjaanSoal::query()
        ->where('id_siswa', $siswa->id)
        ->where('id_soal', $soal->id_soal)
        ->first();

        if (!$pengerjaanSoal) {
            $pengerjaanSoal = PengerjaanSoal::create([
                'id_siswa' => $siswa->id,
                'id_soal' => $soal->id_soal,
                'start_at' => now(),
                'timeout_at' => now()->addHour(),
            ]);
        }

        if ($pengerjaanSoal->timeout_at <= now()) {
            $pengerjaanSoal->hitungNilai();
            $pengerjaanSoal->is_finish = 1;
            $pengerjaanSoal->finish_at = $pengerjaanSoal->timeout_at;
            $pengerjaanSoal->save();
        }

        if ($pengerjaanSoal->is_finish == 1) {
            $pengerjaanSoal->hitungNilai();
            return view('siswa.belajar-nilai', [
                'jadwal' => $jadwal,
                'pengerjaanSoal' => $pengerjaanSoal,
            ]);
        }

        $detailPengerjaanSoal = DetailPengerjaanSoal::query()
        ->where('id_pengerjaan_soal', $pengerjaanSoal->id_pengerjaan_soal)
        ->whereNull('pilihan_jawaban')
        ->whereNull('jawaban_essay')
        ->first();

        if (!$detailPengerjaanSoal) {
            $answeredSoal = DetailPengerjaanSoal::query()
            ->where('id_pengerjaan_soal', $pengerjaanSoal->id_pengerjaan_soal)
            ->where(function ($query) {
                $query->whereNotNull('pilihan_jawaban')
                ->orWhereNotNull('jawaban_essay');
            })
            ->pluck('id_detail_soal');

            $chosenSoal = DetailSoal::query()
            ->where('id_soal', $soal->id_soal)
            ->whereNotIn('id_detail_soal', $answeredSoal->toArray())
            ->inRandomOrder()
            ->first();

            if (!$chosenSoal) {
                return redirect("/siswa/jadwal/{$jadwal->id_jadwal}/belajar/{$materi->id_materi}/soal/review");
            }

            $detailPengerjaanSoal = DetailPengerjaanSoal::create([
                'id_pengerjaan_soal' => $pengerjaanSoal->id_pengerjaan_soal,
                'id_detail_soal' => $chosenSoal->id_detail_soal,
            ]);
        }

        return view('siswa/latihan-soal', [
            'jadwal' => $jadwal,
            'materi' => $materi,
            'soal' => $soal,
            'pengerjaanSoal' => $pengerjaanSoal,
            'detailPengerjaanSoal' => $detailPengerjaanSoal,
        ]);
    }

    public function postLatihanSoal(Jadwal $jadwal, Materi $materi) {
        $siswa = auth()->user();

        $soal = $materi->soal;

        $pengerjaanSoal = PengerjaanSoal::query()
        ->where('id_siswa', $siswa->id)
        ->where('id_soal', $soal->id_soal)
        ->first();

        $detailPengerjaanSoal = DetailPengerjaanSoal::query()
        ->where('id_pengerjaan_soal', $pengerjaanSoal->id_pengerjaan_soal)
        ->whereNull('pilihan_jawaban')
        ->whereNull('jawaban_essay')
        ->first();

        if ($detailPengerjaanSoal->detailSoal->type == 'PG') {
            $detailPengerjaanSoal->pilihan_jawaban = request()->get('pilihan_jawaban');
        } else {
            $detailPengerjaanSoal->jawaban_essay = request()->get('isi_essay');
        }

        $detailPengerjaanSoal->save();

        return back();
    }

    public function viewReviewSoal(Jadwal $jadwal, Materi $materi)
    {
        $siswa = auth()->user();
        $soal = $materi->soal;

        $pengerjaanSoal = PengerjaanSoal::query()
        ->where('id_siswa', $siswa->id)
        ->where('id_soal', $soal->id_soal)
        ->first();

        $detailPengerjaanSoal = DetailPengerjaanSoal::query()
        ->where('id_pengerjaan_soal', $pengerjaanSoal->id_pengerjaan_soal)
        ->get();

        return view('siswa/review-soal', [
            'jadwal' => $jadwal,
            'materi' => $materi,
            'soal' => $soal,
            'pengerjaanSoal' => $pengerjaanSoal,
            'detailPengerjaanSoal' => $detailPengerjaanSoal,
        ]);
    }

    public function postReviewSoal(Jadwal $jadwal, Materi $materi)
    {
        $siswa = auth()->user();
        $soal = $materi->soal;

        $pengerjaanSoal = PengerjaanSoal::query()
        ->where('id_siswa', $siswa->id)
        ->where('id_soal', $soal->id_soal)
        ->first();

        $pengerjaanSoal->hitungNilai();
        $pengerjaanSoal->is_finish = 1;
        $pengerjaanSoal->finish_at = now();
        $pengerjaanSoal->save();

        return redirect()->route('siswa.home.belajar', [
            'jadwal' => $jadwal,
        ]);
    }

    public function viewEditReviewSoal(Jadwal $jadwal, Materi $materi, DetailPengerjaanSoal $detail)
    {
        $soal = $materi->soal;

        $pengerjaanSoal = $detail->pengerjaanSoal;

        return view('siswa/latihan-soal', [
            'jadwal' => $jadwal,
            'materi' => $materi,
            'soal' => $soal,
            'pengerjaanSoal' => $pengerjaanSoal,
            'detailPengerjaanSoal' => $detail,
        ]);
    }

    public function postEditReviewSoal(Jadwal $jadwal, Materi $materi, detailPengerjaanSoal $detail)
    {
        if ($detail->detailSoal->type == 'PG') {
            $detail->pilihan_jawaban = request()->get('pilihan_jawaban');
        } else {
            $detail->jawaban_essay = request()->get('isi_essay');
        }

        $detail->save();

        return redirect()->route('siswa.review.view', [
            'jadwal' => $jadwal,
            'materi' => $materi,
        ]);
    }
}
