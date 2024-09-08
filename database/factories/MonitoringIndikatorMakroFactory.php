<?php

namespace Database\Factories;

use App\Models\MonitoringIndikatorMakro;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringIndikatorMakroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MonitoringIndikatorMakro::class;

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
        'jenis_tkd' => $this->faker->word,
        'nama_pemda' => $this->faker->word,
        'batas_indikator' => $this->faker->word,
        'uraian_indikator' => $this->faker->word,
        'capaian_1' => $this->faker->word,
        'capaian_2' => $this->faker->word,
        'capaian_3' => $this->faker->word,
        'capaian_4' => $this->faker->word,
        'keterangan' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
