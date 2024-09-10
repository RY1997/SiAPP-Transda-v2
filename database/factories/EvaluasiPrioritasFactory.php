<?php

namespace Database\Factories;

use App\Models\EvaluasiPrioritas;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluasiPrioritasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvaluasiPrioritas::class;

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
        'subbidang_tkd' => $this->faker->word,
        'anggaran_tkd' => $this->faker->word,
        'nama_skpd' => $this->faker->text,
        'nama_program' => $this->faker->text,
        'nama_kegiatan' => $this->faker->text,
        'nilai_anggaran' => $this->faker->word,
        'nilai_realisasi' => $this->faker->word,
        'prioritas_kegiatan' => $this->faker->word,
        'prioritas_penggunaan' => $this->faker->word,
        'pemanfaatan_kegiatan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
