<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPengerjaanSoal extends Model
{
    use HasFactory;

    protected $table = 'tb_detail_pengerjaan_soal';
    protected $primaryKey = 'id_detail_pengerjaan_soal';
    protected $guarded = [];

    public function detailSoal()
    {
        return $this->hasOne(DetailSoal::class, 'id_detail_soal', 'id_detail_soal');
    }
}
