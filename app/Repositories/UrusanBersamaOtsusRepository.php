<?php

namespace App\Repositories;

use App\Models\UrusanBersamaOtsus;
use App\Repositories\BaseRepository;

/**
 * Class UrusanBersamaOtsusRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:40 pm UTC
*/

class UrusanBersamaOtsusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'urusan_bersama',
        'anggaran'
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
        return UrusanBersamaOtsus::class;
    }
}
