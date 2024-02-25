<?php

namespace Database\Factories;

use App\Models\MonitoringPenggunaan;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringPenggunaanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MonitoringPenggunaan::class;

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
        'bidang_tkd' => $this->faker->word,
        'alokasi_id' => $this->faker->word,
        'penggunaan_tkd' => $this->faker->word,
        'penyebab_kurang_guna' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
