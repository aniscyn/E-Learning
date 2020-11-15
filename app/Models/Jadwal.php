<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    public const MINGGU = [
        'urutan' => 0,
        'nama' => 'Minggu',
    ];
    public const SENIN = [
        'urutan' => 1,
        'nama' => 'Senin',
    ];
    public const SELASA = [
        'urutan' => 2,
        'nama' => 'Selasa',
    ];
    public const RABU = [
        'urutan' => 3,
        'nama' => 'Rabu',
    ];
    public const KAMIS = [
        'urutan' => 4,
        'nama' => 'Kamis',
    ];
    public const JUMAT = [
        'urutan' => 5,
        'nama' => 'Jumat',
    ];
    public const SABTU = [
        'urutan' => 6,
        'nama' => 'Sabtu',
    ];

    public $incrementing = true;
    public $timestamps = false;

    protected $table = 'tb_jadwal';
    protected $primaryKey = 'id_jadwal';
    // protected $keyType = 'int';
    protected $guarded = [];

    // Relations
    public function mataPelajaran() {
        return $this->hasOne(MataPelajaran::class, 'id_mapel', 'id_mapel');
    }

    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'id_kelas', 'id_kelas');
    }

    public function materi()
    {
        return $this->hasMany(Materi::class, 'id_jadwal', 'id_jadwal');
    }
}
