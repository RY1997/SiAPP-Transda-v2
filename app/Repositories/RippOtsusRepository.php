<?php

namespace App\Repositories;

use App\Models\RippOtsus;
use App\Repositories\BaseRepository;

/**
 * Class RippOtsusRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:40 pm UTC
*/

class RippOtsusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'item_ripp',
        'uraian_ripp',
        'penyebab_ripp'
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
        return RippOtsus::class;
    }
}
