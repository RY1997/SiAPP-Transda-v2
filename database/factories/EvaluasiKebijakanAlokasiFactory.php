<?php

namespace Database\Factories;

use App\Models\EvaluasiKebijakanAlokasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluasiKebijakanAlokasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvaluasiKebijakanAlokasi::class;

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
        'dasar_penetapan' => $this->faker->word,
        'perhitungan_realisasi' => $this->faker->word,
        'rekon_triwulanan' => $this->faker->word,
        'keterlibatan_penghasil' => $this->faker->word,
        'keberadaan_kebijakan' => $this->faker->word,
        'nomor_kebijakan' => $this->faker->word,
        'tgl_kebijakan' => $this->faker->word,
        'uraian_kebijakan' => $this->faker->text,
        'kesesuaian_pusat' => $this->faker->word,
        'alokasi_opd' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
