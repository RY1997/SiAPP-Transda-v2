<?php

namespace Database\Factories;

use App\Models\EvaluasiRengar;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluasiRengarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvaluasiRengar::class;

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
        'kode_program' => $this->faker->word,
        'nama_program' => $this->faker->word,
        'kode_kegiatan' => $this->faker->word,
        'nama_kegiatan' => $this->faker->word,
        'kode_subkegiatan' => $this->faker->word,
        'nama_subkegiatan' => $this->faker->word,
        'sumber_dana' => $this->faker->word,
        'kode_akun_utama' => $this->faker->word,
        'nama_akun_utama' => $this->faker->word,
        'kode_akun_kelompok' => $this->faker->word,
        'nama_akun_kelompok' => $this->faker->word,
        'kode_akun_jenis' => $this->faker->word,
        'nama_akun_jenis' => $this->faker->word,
        'kode_akun_objek' => $this->faker->word,
        'nama_akun_objek' => $this->faker->word,
        'kode_akun_subrinci' => $this->faker->word,
        'nama_akun_subrinci' => $this->faker->word,
        'nilai_anggaran' => $this->faker->word,
        'urusan_subkegiatan' => $this->faker->word,
        'nilai_realisasi' => $this->faker->word,
        'relevansi_subkegiatan' => $this->faker->word,
        'pelaksanaan_subkegiatan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
