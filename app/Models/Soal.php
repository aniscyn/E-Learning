<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{

    protected $table = 'tb_soal';
    protected $primaryKey = 'id_soal';
    protected $guarded = [];

    public function materi()
    {
        return $this->hasOne(Materi::class, 'id_materi', 'id_materi');
    }

    public function jadwal()
    {
        return $this->hasOne(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }

    public function detailSoal()
    {
        return $this->hasMany(DetailSoal::class, 'id_soal', 'id_soal');
    }

    public function getNamaMateri()
    {
        if (!$this->is_uts && !$this->is_uas) {
            return $this->materi->nm_materi;
        }

        return "Ujian";
    }

    public function refreshJumlahSoal()
    {
        $jumlahSoal = $this->detailSoal()->count();

        $this->jumlah_soal = $jumlahSoal;
        $this->save();
    }
}
