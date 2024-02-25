<?php

namespace App\Repositories;

use App\Models\EvaluasiIndikator;
use App\Repositories\BaseRepository;

/**
 * Class EvaluasiIndikatorRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:37 pm UTC
*/

class EvaluasiIndikatorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'uraian_indikator',
        'target',
        'realisasi',
        'cutoff_capaian',
        'sumber_data',
        'keterangan'
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
        return EvaluasiIndikator::class;
    }
}
