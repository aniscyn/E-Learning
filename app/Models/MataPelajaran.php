<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{

    public $incrementing = false;
    public $timestamps = false;

    protected $table = 'tb_mapel';
    protected $primaryKey = 'id_mapel';
    // protected $keyType = 'int';
    protected $guarded = [];
}
