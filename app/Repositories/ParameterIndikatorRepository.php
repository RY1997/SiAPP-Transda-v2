<?php

namespace App\Repositories;

use App\Models\ParameterIndikator;
use App\Repositories\BaseRepository;

/**
 * Class ParameterIndikatorRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:24 pm UTC
*/

class ParameterIndikatorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jenis_tkd',
        'bidang_tkd',
        'uraian_indikator',
        'satuan_indikator'
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
        return ParameterIndikator::class;
    }
}
