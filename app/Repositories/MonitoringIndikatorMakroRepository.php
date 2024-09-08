<?php

namespace App\Repositories;

use App\Models\MonitoringIndikatorMakro;
use App\Repositories\BaseRepository;

/**
 * Class MonitoringIndikatorMakroRepository
 * @package App\Repositories
 * @version September 8, 2024, 10:27 am WIB
*/

class MonitoringIndikatorMakroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'jenis_tkd',
        'nama_pemda',
        'batas_indikator',
        'uraian_indikator',
        'capaian_1',
        'capaian_2',
        'capaian_3',
        'capaian_4',
        'keterangan'
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
        return MonitoringIndikatorMakro::class;
    }
}
