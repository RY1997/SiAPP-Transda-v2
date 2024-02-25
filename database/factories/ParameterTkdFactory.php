<?php

namespace Database\Factories;

use App\Models\ParameterTkd;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParameterTkdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParameterTkd::class;

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
        'alokasi_minimal' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
