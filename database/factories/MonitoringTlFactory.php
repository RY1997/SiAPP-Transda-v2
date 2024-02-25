<?php

namespace Database\Factories;

use App\Models\MonitoringTl;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringTlFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MonitoringTl::class;

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
        'kelompok_permasalahan' => $this->faker->word,
        'uraian_permasalahan' => $this->faker->text,
        'nilai_permasalahan' => $this->faker->word,
        'uraian_rekomendasi' => $this->faker->text,
        'uraian_tl' => $this->faker->text,
        'nilai_tl' => $this->faker->word,
        'simpulan_tl' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
