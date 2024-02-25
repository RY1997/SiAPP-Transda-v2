<?php

namespace App\Repositories;

use App\Models\KebijakanOtsus;
use App\Repositories\BaseRepository;

/**
 * Class KebijakanOtsusRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:39 pm UTC
*/

class KebijakanOtsusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'dasar_penetapan',
        'tgl_penetapan',
        'simpulan_penetapan'
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
        return KebijakanOtsus::class;
    }
}
