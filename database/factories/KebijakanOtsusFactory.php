<?php

namespace Database\Factories;

use App\Models\KebijakanOtsus;
use Illuminate\Database\Eloquent\Factories\Factory;

class KebijakanOtsusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KebijakanOtsus::class;

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
        'dasar_penetapan' => $this->faker->word,
        'tgl_penetapan' => $this->faker->word,
        'simpulan_penetapan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
