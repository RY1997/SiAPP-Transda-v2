<?php

namespace App\Repositories;

use App\Models\ParameterLaporan;
use App\Repositories\BaseRepository;

/**
 * Class ParameterLaporanRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:28 pm UTC
*/

class ParameterLaporanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jenis_tkd',
        'bidang_tkd',
        'nama_laporan',
        'batas_penyampaian'
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
        return ParameterLaporan::class;
    }
}
