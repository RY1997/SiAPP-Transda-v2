<?php

namespace Database\Factories;

use App\Models\MonitoringApbd;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringApbdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MonitoringApbd::class;

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
        'belanja_daerah' => $this->faker->word,
        'belanja_pegawai' => $this->faker->word,
        'belanja_barjas' => $this->faker->word,
        'belanja_modal' => $this->faker->word,
        'belanja_hibah' => $this->faker->word,
        'belanja_lainnya' => $this->faker->word,
        'pendapatan_daerah' => $this->faker->word,
        'pendapatan_pad' => $this->faker->word,
        'pendapatan_transfer' => $this->faker->word,
        'pendapatan_lainnya' => $this->faker->word,
        'penerimaan_pembiayaan' => $this->faker->word,
        'pengeluaran_pembiayaan' => $this->faker->word,
        'silpa' => $this->faker->word,
        'silpa_tkd' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
