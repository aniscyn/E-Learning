<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;

    protected $table = 'tb_materi';
    protected $primaryKey = 'id_materi';
    // protected $keyType = 'string';
    protected $guarded = [];
}
