<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

class KelasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kelas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $jurusan = $this->faker->randomElement(['IPA', 'IPS']);

        return [
            'id_kelas' => $this->faker->randomDigit,
            'nm_kelas' => "X" . $jurusan . "1",
            'jurusan' => $jurusan,
        ];
    }
}
