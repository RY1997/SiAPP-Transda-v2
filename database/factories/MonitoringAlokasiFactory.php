<?php

namespace Database\Factories;

use App\Models\MonitoringAlokasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringAlokasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MonitoringAlokasi::class;

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
        'tipe_tkd' => $this->faker->word,
        'bidang_tkd' => $this->faker->word,
        'alokasi_tkd' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
