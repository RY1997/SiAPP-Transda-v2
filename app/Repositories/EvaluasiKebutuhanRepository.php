<?php

namespace App\Repositories;

use App\Models\EvaluasiKebutuhan;
use App\Repositories\BaseRepository;

/**
 * Class EvaluasiKebutuhanRepository
 * @package App\Repositories
 * @version August 29, 2024, 11:17 pm WIB
*/

class EvaluasiKebutuhanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_pwk',
        'nama_pemda',
        'tahun',
        'jenis_tkd',
        'bidang',
        'program',
        'kegiatan',
        'indikator_kegiatan',
        'satuan',
        'nilai_target',
        'unit_target',
        'nilai_pad',
        'unit_pad',
        'nilai_dau',
        'unit_dau',
        'nilai_dbh',
        'unit_dbh',
        'nilai_dak',
        'unit_dak',
        'nilai_otsus',
        'unit_otsus',
        'unit_selesai',
        'unit_tidak_selesai',
        'unit_tidak_dilaksanakan',
        'unit_tahun_selanjutnya',
        'simpulan_ketuntasan',
        'penyebab_tidak_tuntas'
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
        return EvaluasiKebutuhan::class;
    }
}
