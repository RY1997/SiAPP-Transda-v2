<?php

namespace App\Repositories;

use App\Models\EvaluasiSisaDak;
use App\Repositories\BaseRepository;

/**
 * Class EvaluasiSisaDakRepository
 * @package App\Repositories
 * @version September 9, 2024, 2:33 am WIB
*/

class EvaluasiSisaDakRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'bidang_tkd',
        'nilai_penyaluran',
        'nilai_penggunaan',
        'sisa_dak_sebelumnya',
        'penganggaran_bidang_sama',
        'penganggaran_bidang_lainnya'
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
        return EvaluasiSisaDak::class;
    }
}
