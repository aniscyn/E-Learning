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

}
