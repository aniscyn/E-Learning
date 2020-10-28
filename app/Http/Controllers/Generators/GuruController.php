<?php

namespace App\Http\Controllers\Generators;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\WithFaker;
class GuruController extends Controller
{

    public function viewAdd()
    {
        return view('generator.guru.add');
    }

    public function processAdd()
    {
        $faker = Faker::create('id_ID');

        $user = User::create([
            'username' => $faker->randomNumber(6),
            'password' => bcrypt('password'),
            'role' => 'guru',
        ]);


        $siswa = Guru::create([
            'nip' => $user->username,
            'user_id' => $user->id,
            'nm_lengkap' => $faker->firstName . " " . $faker->lastName,
            'tgl_lahir' => '1997-08-28',
            'jk' => 'Pria',
            'alamat_guru' => $faker->text,
            'email' => $faker->email,
            'tlp' => $faker->randomNumber(6),
        ]);

        return back();
    }
}
