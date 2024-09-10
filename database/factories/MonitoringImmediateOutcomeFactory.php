<?php

namespace Database\Factories;

use App\Models\MonitoringImmediateOutcome;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringImmediateOutcomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MonitoringImmediateOutcome::class;

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
        'keberadaan_io' => $this->faker->word,
        'target' => $this->faker->word,
        'capaian' => $this->faker->word,
        'penyebab' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
