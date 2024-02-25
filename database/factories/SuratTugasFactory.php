<?php

namespace Database\Factories;

use App\Models\SuratTugas;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuratTugasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SuratTugas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_pwk' => $this->faker->word,
        'no_st' => $this->faker->word,
        'tgl_st' => $this->faker->word,
        'nama_penugasan' => $this->faker->word,
        'jenis_penugasan' => $this->faker->word,
        'nama_pemda' => $this->faker->word,
        'tgl_mulai' => $this->faker->word,
        'tgl_akhir' => $this->faker->word,
        'status_st' => $this->faker->word,
        'file_st' => $this->faker->word,
        'tw_penugasan' => $this->faker->word,
        'tahun_penugasan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
