<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengerjaanSoal extends Model
{
    use HasFactory;

    protected $table = 'tb_pengerjaan_soal';
    protected $primaryKey = 'id_pengerjaan_soal';
    protected $guarded = [];

    public function hitungNilai()
    {
        $jumlahSoal = $this->soal->detailSoal->count();
        $jumlahBenar = 0;
        $detailPengerjaan = $this->detailPengerjaan;

        foreach ($detailPengerjaan as $detail) {
            if ($detail->pilihan_jawaban) {
                if ($detail->pilihan_jawaban == $detail->detailSoal->jawaban_pilihan) {
                    $jumlahBenar++;
                }
            }
        }

        $this->jumlah_benar = $jumlahBenar;
        $nilai = ($jumlahBenar / $jumlahSoal) * 100;
        $this->nilai = $nilai;
        $this->save();
    }

    public function detailPengerjaan()
    {
        return $this->hasMany(DetailPengerjaanSoal::class, 'id_pengerjaan_soal', 'id_pengerjaan_soal');
    }

    public function soal()
    {
        return $this->hasOne(Soal::class, 'id_soal', 'id_soal');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_siswa');
    }
}
