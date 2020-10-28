<?php

namespace App\Http\Controllers\Generators;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\WithFaker;

class SiswaController extends Controller
{

    public function viewAdd()
    {
        return view('generator.siswa.add');
    }

    public function processAdd()
    {
        $faker = Faker::create('id_ID');

        $user = User::create([
            'username' => $faker->randomNumber(6),
            'password' => bcrypt('password'),
            'role' => 'siswa',
        ]);


        $siswa = Siswa::create([
            'nis' => $user->username,
            'user_id' => $user->id,
            'nm_lengkap' => $faker->firstName . " " . $faker->lastName,
            'tgl_lahir' => '1997-08-28',
            'jk' => 'Pria',
            'alamat_siswa' => $faker->text,
            'email' => $faker->email,
            'tlp' => $faker->randomNumber(6),
        ]);

        return back();
    }
}
