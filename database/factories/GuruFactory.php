<?php

namespace Database\Factories;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class GuruFactory extends Factory
{
    use WithFaker;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guru::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nip' => $this->faker->randomNumber(6),
            'nm_lengkap' => $this->faker->firstName . " " . $this->faker->lastName,
            'tgl_lahir' => $this->faker->dateTime('1990-01-01'),
            'jk' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'alamat_guru' => $this->faker->address,
            'email' => $this->faker->email,
            'tlp' => $this->faker->randomNumber(6),
        ];
    }
}
