<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'password' => bcrypt('1997-08-28'),
            'role' => 'siswa',
        ]);

        $kelas = Kelas::factory()->create();

        $siswa = Siswa::factory()->create([
            'nis' => $user->username,
            'user_id' => $user->id,
            'kelas_id' => $kelas->id_kelas,
        ]);
    }
}
