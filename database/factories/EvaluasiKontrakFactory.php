<?php

namespace Database\Factories;

use App\Models\EvaluasiKontrak;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluasiKontrakFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvaluasiKontrak::class;

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
        'nomor_kontrak' => $this->faker->word,
        'tanggal_kontrak' => $this->faker->word,
        'uraian_kontrak' => $this->faker->text,
        'program' => $this->faker->text,
        'kegiatan' => $this->faker->text,
        'target_output' => $this->faker->randomDigitNotNull,
        'satuan_output' => $this->faker->word,
        'jenis_kontrak' => $this->faker->text,
        'lokasi' => $this->faker->text,
        'nama_opd' => $this->faker->text,
        'nama_rekanan' => $this->faker->text,
        'tgl_lelang' => $this->faker->text,
        'masa_kontrak' => $this->faker->word,
        'tanggal_mulai' => $this->faker->word,
        'tanggal_selesai' => $this->faker->word,
        'nilai_kontrak' => $this->faker->word,
        'sisa_nilai_kontrak' => $this->faker->word,
        'penyebab_pembayaran' => $this->faker->text,
        'no_bast' => $this->faker->text,
        'tgl_bast' => $this->faker->word,
        'realisasi_bast' => $this->faker->text,
        'persen_fisik' => $this->faker->text,
        'penyebab_realisasi' => $this->faker->text,
        'uji_petik' => $this->faker->word,
        'keterangan' => $this->faker->text,
        'target_omspan' => $this->faker->randomDigitNotNull,
        'target_auditor' => $this->faker->randomDigitNotNull,
        'realisasi_omspan' => $this->faker->randomDigitNotNull,
        'realisasi_auditor' => $this->faker->randomDigitNotNull,
        'fisik_omspan' => $this->faker->randomDigitNotNull,
        'fisik_auditor' => $this->faker->randomDigitNotNull,
        'nilai_laporan' => $this->faker->word,
        'nilai_auditor' => $this->faker->word,
        'masalah_pelaksanaan' => $this->faker->word,
        'masalah1' => $this->faker->word,
        'uraian_masalah1' => $this->faker->text,
        'masalah2' => $this->faker->word,
        'uraian_masalah2' => $this->faker->text,
        'masalah3' => $this->faker->word,
        'uraian_masalah3' => $this->faker->text,
        'masalah4' => $this->faker->word,
        'uraian_masalah4' => $this->faker->text,
        'masalah5' => $this->faker->word,
        'uraian_masalah5' => $this->faker->text,
        'masalah6' => $this->faker->word,
        'uraian_masalah6' => $this->faker->text,
        'masalah7' => $this->faker->word,
        'uraian_masalah7' => $this->faker->text,
        'masalah8' => $this->faker->word,
        'uraian_masalah8' => $this->faker->text,
        'masalah_pemanfaatan' => $this->faker->word,
        'manfaat1' => $this->faker->word,
        'uraian_manfaat1' => $this->faker->text,
        'manfaat2' => $this->faker->word,
        'uraian_manfaat2' => $this->faker->text,
        'manfaat3' => $this->faker->word,
        'uraian_manfaat3' => $this->faker->text,
        'manfaat4' => $this->faker->word,
        'uraian_manfaat4' => $this->faker->text,
        'manfaat5' => $this->faker->word,
        'uraian_manfaat5' => $this->faker->text,
        'manfaat6' => $this->faker->word,
        'uraian_manfaat6' => $this->faker->text,
        'manfaat7' => $this->faker->word,
        'uraian_manfaat7' => $this->faker->text,
        'manfaat8' => $this->faker->word,
        'uraian_manfaat8' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
