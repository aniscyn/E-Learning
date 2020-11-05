<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    public $incrementing = true;
    public $timestamps = false;

    protected $table = 'tb_kelas';
    protected $primaryKey = 'id_kelas';
    // protected $keyType = 'int';
    protected $guarded = [];
}
