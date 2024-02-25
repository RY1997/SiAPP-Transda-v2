<?php

namespace App\Repositories;

use App\Models\MonitoringAlokasi;
use App\Repositories\BaseRepository;

/**
 * Class MonitoringAlokasiRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:34 pm UTC
*/

class MonitoringAlokasiRepository extends BaseRepository
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
        'alokasi_tkd'
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
        return MonitoringAlokasi::class;
    }
}
