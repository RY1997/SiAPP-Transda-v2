<?php

namespace App\Repositories;

use App\Models\SuratTugas;
use App\Repositories\BaseRepository;

/**
 * Class SuratTugasRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:41 pm UTC
*/

class SuratTugasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_pwk',
        'no_st',
        'tgl_st',
        'nama_penugasan',
        'jenis_penugasan',
        'nama_pemda',
        'tgl_mulai',
        'tgl_akhir',
        'status_st',
        'file_st',
        'tw_penugasan',
        'tahun_penugasan'
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
        return SuratTugas::class;
    }
}
