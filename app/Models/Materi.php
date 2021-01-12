<?php

namespace App\Models;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materi extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;

    protected $table = 'tb_materi';
    protected $primaryKey = 'id_materi';
    // protected $keyType = 'string';
    protected $guarded = [];

    public function jadwal()
    {
        return $this->hasOne(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }

    public function mataPelajaran() {
        return $this->hasOne(MataPelajaran::class, 'id_mapel', 'id_mapel');
    }

    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'id_kelas', 'id_kelas');
    }

    public function userGuru(){
        return $this->hasOne(User::class, 'id', 'id_guru');
    }

    public function soal()
    {
        return $this->hasOne(Soal::class, 'id_materi', 'id_materi');
    }

    public static function getMateriByJadwal($jadwalId) {
        return self::query()
        ->where('id_jadwal', $jadwalId)
        ->get();
    }

}

