<?php

namespace Database\Factories;

use App\Models\RippOtsus;
use Illuminate\Database\Eloquent\Factories\Factory;

class RippOtsusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RippOtsus::class;

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
        'item_ripp' => $this->faker->text,
        'uraian_ripp' => $this->faker->text,
        'penyebab_ripp' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
