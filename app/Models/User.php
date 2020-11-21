<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    public const ROLE_SISWA = "siswa";
    public const ROLE_GURU = 'guru';
    public const ROLE_ADMIN = 'admin';

    public $incrementing = true;

    protected $table = 'users';
    protected $guarded = [];

    // Relations
    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'user_id', 'id');
    }

    public function guru()
    {
        return $this->hasOne(Guru::class, 'user_id', 'id');
    }

    public function admin()
    {
        return $this->hasOne(Guru::class, 'user_id', 'id');
    }

    public function isRoleSiswa()
    {
        return ($this->role == self::ROLE_SISWA);
    }

    public function isRoleGuru()
    {
        return ($this->role == self::ROLE_GURU);
    }
    public function isRoleAdmin()
    {
        return ($this->role == self::ROLE_ADMIN);
    }
}
