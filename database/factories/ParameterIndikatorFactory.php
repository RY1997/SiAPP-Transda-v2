<?php

namespace Database\Factories;

use App\Models\ParameterIndikator;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParameterIndikatorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParameterIndikator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jenis_tkd' => $this->faker->word,
        'bidang_tkd' => $this->faker->word,
        'uraian_indikator' => $this->faker->word,
        'satuan_indikator' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
