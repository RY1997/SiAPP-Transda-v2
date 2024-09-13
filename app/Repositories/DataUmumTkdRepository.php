<?php

namespace App\Repositories;

use App\Models\DataUmumTkd;
use App\Repositories\BaseRepository;

/**
 * Class DataUmumTkdRepository
 * @package App\Repositories
 * @version September 13, 2024, 3:42 pm WIB
*/

class DataUmumTkdRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'tipe_tkd',
        'bidang_tkd',
        'subbidang_tkd',
        'uraian',
        'alokasi_tkd',
        'penyaluran_tkd',
        'penganggaran_tkd',
        'penggunaan_tkd'
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
        return DataUmumTkd::class;
    }
}
