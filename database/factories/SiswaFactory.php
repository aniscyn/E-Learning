<?php

namespace Database\Factories;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Siswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->randomNumber(6),
            'nm_lengkap' => $this->faker->firstName . " " . $this->faker->lastName,
            'tgl_lahir' => $this->faker->dateTimeBetween('2000-01-01', '2005-01-01'),
            'jk' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'alamat_siswa' => $this->faker->address,
            'email' => $this->faker->email,
            'tlp' => $this->faker->randomNumber(6),
        ];
    }
}
