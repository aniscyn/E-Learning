<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public const ROLE_SISWA = "siswa";
    public const ROLE_GURU = 'guru';

    public $increments = true;

    protected $table = 'users';
    protected $guarded = [];

    public function isRoleSiswa()
    {
        return ($this->role == self::ROLE_SISWA);
    }

    public function isRoleGuru()
    {
        return ($this->role == self::ROLE_GURU);
    }
}
