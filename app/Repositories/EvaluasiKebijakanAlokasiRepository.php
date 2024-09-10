<?php

namespace App\Repositories;

use App\Models\EvaluasiKebijakanAlokasi;
use App\Repositories\BaseRepository;

/**
 * Class EvaluasiKebijakanAlokasiRepository
 * @package App\Repositories
 * @version September 9, 2024, 2:00 am WIB
*/

class EvaluasiKebijakanAlokasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'bidang_tkd',
        'dasar_penetapan',
        'perhitungan_realisasi',
        'rekon_triwulanan',
        'keterlibatan_penghasil',
        'keberadaan_kebijakan',
        'nomor_kebijakan',
        'tgl_kebijakan',
        'uraian_kebijakan',
        'kesesuaian_pusat',
        'alokasi_opd'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EvaluasiKebijakanAlokasi::class;
    }
}
