<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSoal extends Model
{
    public $incrementing = true;
    public $timestamps = true;

    protected $table = 'tbl_detail_soal';
    protected $primaryKey = 'id_detail_soal';
    // protected $keyType = 'string';
    protected $guarded = [];
}
