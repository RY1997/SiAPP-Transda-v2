<?php

namespace Database\Factories;

use App\Models\Pelaporan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PelaporanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pelaporan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_pwk' => $this->faker->word,
        'id_st' => $this->faker->word,
        'no_laporan' => $this->faker->word,
        'tgl_laporan' => $this->faker->word,
        'nama_pemda' => $this->faker->word,
        'status_laporan' => $this->faker->word,
        'file_laporan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
