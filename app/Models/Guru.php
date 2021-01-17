<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;

    protected $table = 'tb_guru';
    protected $primaryKey = 'nip';
    protected $keyType = 'string';
    protected $guarded = [];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

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
}
