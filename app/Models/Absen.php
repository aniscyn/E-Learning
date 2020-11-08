<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    public $incrementing = true;
    public $timestamps = false;

    protected $table = 'tb_absen';
    protected $primaryKey = 'id_absen';
    // protected $keyType = 'string';
    protected $guarded = [];
}
