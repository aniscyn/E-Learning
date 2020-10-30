<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;

    // Relations
    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'id_kelas', 'kelas_id');
    }

    protected $table = 'tb_siswa';
    protected $primaryKey = 'nis';
    protected $keyType = 'string';
    protected $guarded = [];
}
