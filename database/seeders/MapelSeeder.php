<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataPelajaran::create([
            'id_mapel' => 1,
            'nm_mapel' => "Bahasa Indonesia"
        ]);
        MataPelajaran::create([
            'id_mapel' => 2,
            'nm_mapel' => "Bahasa Inggris"
        ]);
        MataPelajaran::create([
            'id_mapel' => 3,
            'nm_mapel' => "Matematika"
        ]);
        MataPelajaran::create([
            'id_mapel' => 4,
            'nm_mapel' => "Fisika"
        ]);
    }
}
