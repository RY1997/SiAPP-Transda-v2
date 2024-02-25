<?php

namespace App\Repositories;

use App\Models\EvaluasiLaporan;
use App\Repositories\BaseRepository;

/**
 * Class EvaluasiLaporanRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:38 pm UTC
*/

class EvaluasiLaporanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'nama_laporan',
        'keberadaan_laporan',
        'nomor_laporan',
        'tgl_laporan',
        'tgl_penyampaian',
        'penyebab_tidak_tepat_waktu'
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
        return EvaluasiLaporan::class;
    }
}
