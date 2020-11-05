<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;

class SiswaSeeder extends Seeder
{
    use WithFaker;

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
            'username' => 11190551
        ]);

        $kelas = Kelas::factory()->create();

        $siswa = Siswa::factory()->create([
            'nis' => $user->username,
            'user_id' => $user->id,
            'kelas_id' => $kelas->id_kelas,
        ]);

        $jadwal = Jadwal::factory(5)->create([
            'id_kelas' => $kelas->id_kelas,
            'id_guru' => 11190552,
            'id_mapel' => rand(1, 4),
        ])->each(function ($item) {
            $item->id_mapel = rand(1, 4);
            $item->save();
        });
    }
}
