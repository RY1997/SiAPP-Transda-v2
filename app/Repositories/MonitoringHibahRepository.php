<?php

namespace App\Repositories;

use App\Models\MonitoringHibah;
use App\Repositories\BaseRepository;

/**
 * Class MonitoringHibahRepository
 * @package App\Repositories
 * @version September 9, 2024, 9:41 pm WIB
*/

class MonitoringHibahRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'uraian_hibah',
        'alokasi_hibah',
        'penyaluran_hibah',
        'penggunaan_hibah'
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
        return MonitoringHibah::class;
    }
}
