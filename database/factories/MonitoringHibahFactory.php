<?php

namespace Database\Factories;

use App\Models\MonitoringHibah;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringHibahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MonitoringHibah::class;

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
        'uraian_hibah' => $this->faker->word,
        'alokasi_hibah' => $this->faker->word,
        'penyaluran_hibah' => $this->faker->word,
        'penggunaan_hibah' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
