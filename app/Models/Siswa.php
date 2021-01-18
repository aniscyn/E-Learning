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

    public function getProfilePhotoNameFile()
    {
        $path = $this->profile_photo;

        $exploded = explode('/', $path);

        return $exploded[count($exploded) - 1];
    }

    public function getPhotoProfilePath()
    {
        if ($this->profile_photo) {
            return asset('storage/profile_photos/' . $this->getProfilePhotoNameFile());
        }

        return 'https://mpng.subpng.com/20180404/sqe/kisspng-computer-icons-user-profile-clip-art-big-5ac5283827d286.2570974715228703281631.jpg';
    }

    public function absenHariIni()
    {
        return $this->hasOne(Absen::class, 'id_user', 'user_id');
    }
}
