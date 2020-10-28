<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $increments = false;
    public $timestamps = false;

    protected $table = 'tb_siswa';
    protected $primaryKey = 'nis';
    protected $keyType = 'string';
    protected $guarded = [];
}
