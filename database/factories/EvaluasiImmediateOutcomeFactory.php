<?php

namespace Database\Factories;

use App\Models\EvaluasiImmediateOutcome;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluasiImmediateOutcomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvaluasiImmediateOutcome::class;

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
        'uraian_indikator' => $this->faker->text,
        'target' => $this->faker->word,
        'capaian' => $this->faker->word,
        'satuan' => $this->faker->word,
        'keterangan' => $this->faker->text,
        'kendala' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
