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

    public function getNamaMateri()
    {
        if (!$this->is_uts && !$this->is_uas) {
            return $this->materi->nm_materi;
        }

        return "Ujian";
    }
}
