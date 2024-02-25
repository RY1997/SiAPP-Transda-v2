<?php

namespace Database\Factories;

use App\Models\EvaluasiLaporan;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluasiLaporanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvaluasiLaporan::class;

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
        'nama_laporan' => $this->faker->word,
        'keberadaan_laporan' => $this->faker->word,
        'nomor_laporan' => $this->faker->word,
        'tgl_laporan' => $this->faker->word,
        'tgl_penyampaian' => $this->faker->word,
        'penyebab_tidak_tepat_waktu' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
