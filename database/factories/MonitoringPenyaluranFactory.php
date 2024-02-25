<?php

namespace Database\Factories;

use App\Models\MonitoringPenyaluran;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringPenyaluranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MonitoringPenyaluran::class;

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
        'alokasi_id' => $this->faker->word,
        'tahap_salur' => $this->faker->word,
        'penyaluran_tkd' => $this->faker->word,
        'tepat_jumlah' => $this->faker->word,
        'penyebab_tidak_tepat_jumlah' => $this->faker->text,
        'tgl_salur' => $this->faker->word,
        'tepat_waktu' => $this->faker->word,
        'penyebab_tidak_tepat_waktu' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
