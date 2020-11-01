<?php

namespace Database\Factories;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class JadwalFactory extends Factory
{
    use WithFaker;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jadwal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $hari = $this->faker->randomElement([
            Jadwal::SENIN,
            Jadwal::SELASA,
            Jadwal::RABU,
            Jadwal::KAMIS
        ]);

        return [
            'urutan_hari' => $hari['urutan'],
            'nama_hari' => $hari['nama'],
            'jm_mulai' => $this->faker->time(),
            'jm_selesai' => $this->faker->time(),
        ];
    }
}
