<?php

namespace Database\Factories;

use App\Models\DataUmumTkd;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataUmumTkdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataUmumTkd::class;

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
        'alokasi_tkd' => $this->faker->word,
        'penyaluran_tkd' => $this->faker->word,
        'penganggaran_tkd' => $this->faker->word,
        'penggunaan_tkd' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
