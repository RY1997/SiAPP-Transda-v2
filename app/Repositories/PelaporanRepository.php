<?php

namespace App\Repositories;

use App\Models\Pelaporan;
use App\Repositories\BaseRepository;

/**
 * Class PelaporanRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:42 pm UTC
*/

class PelaporanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_pwk',
        'id_st',
        'no_laporan',
        'tgl_laporan',
        'nama_pemda',
        'status_laporan',
        'file_laporan'
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
        return Pelaporan::class;
    }
}
