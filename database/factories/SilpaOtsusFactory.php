<?php

namespace Database\Factories;

use App\Models\SilpaOtsus;
use Illuminate\Database\Eloquent\Factories\Factory;

class SilpaOtsusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SilpaOtsus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tahun' => $this->faker->word,
        'kode_pwk' => $this->faker->word,
        'nama_pemda' => $this->faker->word,
        'jenis_tkd' => $this->faker->word,
        'nilai_silpa' => $this->faker->word,
        'dianggarkan_relevan' => $this->faker->word,
        'dianggarkan_tidak_relevan' => $this->faker->word,
        'tidak_dianggarkan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
