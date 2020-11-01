<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
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
            'role' => 'guru',
            'username' => 11190552
        ]);

        $siswa = Guru::factory()->create([
            'nip' => $user->username,
            'user_id' => $user->id,
        ]);
    }
}
