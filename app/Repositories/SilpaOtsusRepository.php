<?php

namespace App\Repositories;

use App\Models\SilpaOtsus;
use App\Repositories\BaseRepository;

/**
 * Class SilpaOtsusRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:41 pm UTC
*/

class SilpaOtsusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'nilai_silpa',
        'dianggarkan_relevan',
        'dianggarkan_tidak_relevan',
        'tidak_dianggarkan'
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
        return SilpaOtsus::class;
    }
}
