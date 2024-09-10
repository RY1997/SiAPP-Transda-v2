<?php

namespace Database\Factories;

use App\Models\EvaluasiSisaDak;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluasiSisaDakFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvaluasiSisaDak::class;

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
        'nilai_penyaluran' => $this->faker->word,
        'nilai_penggunaan' => $this->faker->word,
        'sisa_dak_sebelumnya' => $this->faker->word,
        'penganggaran_bidang_sama' => $this->faker->word,
        'penganggaran_bidang_lainnya' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
