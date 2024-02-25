<?php

namespace App\Repositories;

use App\Models\MonitoringPenyaluran;
use App\Repositories\BaseRepository;

/**
 * Class MonitoringPenyaluranRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:34 pm UTC
*/

class MonitoringPenyaluranRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'alokasi_id',
        'tahap_salur',
        'penyaluran_tkd',
        'tepat_jumlah',
        'penyebab_tidak_tepat_jumlah',
        'tgl_salur',
        'tepat_waktu',
        'penyebab_tidak_tepat_waktu'
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
        return MonitoringPenyaluran::class;
    }
}
