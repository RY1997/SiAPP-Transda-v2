<?php

namespace Database\Factories;

use App\Models\EvaluasiKebutuhan;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluasiKebutuhanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvaluasiKebutuhan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_pwk' => $this->faker->word,
        'nama_pemda' => $this->faker->word,
        'tahun' => $this->faker->word,
        'jenis_tkd' => $this->faker->word,
        'program' => $this->faker->text,
        'kegiatan' => $this->faker->text,
        'indikator_kegiatan' => $this->faker->text,
        'satuan' => $this->faker->word,
        'nilai_target' => $this->faker->word,
        'unit_target' => $this->faker->word,
        'nilai_pad' => $this->faker->word,
        'unit_pad' => $this->faker->word,
        'nilai_dau' => $this->faker->word,
        'unit_dau' => $this->faker->word,
        'nilai_dbh' => $this->faker->word,
        'unit_dbh' => $this->faker->word,
        'nilai_dak' => $this->faker->word,
        'unit_dak' => $this->faker->word,
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
