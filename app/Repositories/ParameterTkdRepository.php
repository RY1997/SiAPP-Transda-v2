<?php

namespace App\Repositories;

use App\Models\ParameterTkd;
use App\Repositories\BaseRepository;

/**
 * Class ParameterTkdRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:23 pm UTC
*/

class ParameterTkdRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jenis_tkd',
        'bidang_tkd',
        'alokasi_minimal'
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
        return ParameterTkd::class;
    }
}
