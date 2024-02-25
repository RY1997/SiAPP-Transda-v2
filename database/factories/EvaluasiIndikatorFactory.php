<?php

namespace Database\Factories;

use App\Models\EvaluasiIndikator;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluasiIndikatorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvaluasiIndikator::class;

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
        'uraian_indikator' => $this->faker->word,
        'target' => $this->faker->randomDigitNotNull,
        'realisasi' => $this->faker->randomDigitNotNull,
        'cutoff_capaian' => $this->faker->word,
        'sumber_data' => $this->faker->word,
        'keterangan' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
