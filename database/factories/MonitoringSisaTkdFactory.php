<?php

namespace Database\Factories;

use App\Models\MonitoringSisaTkd;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringSisaTkdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MonitoringSisaTkd::class;

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
        'tipe_tkd' => $this->faker->word,
        'bidang_tkd' => $this->faker->word,
        'subbidang_tkd' => $this->faker->word,
        'uraian' => $this->faker->word,
        'sisa_dana_tkd' => $this->faker->word,
        'dianggarkan_kembali' => $this->faker->word,
        'tidak_dianggarkan_kembali' => $this->faker->word,
        'penyebab' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
