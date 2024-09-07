<?php

namespace App\Repositories;

use App\Models\MonitoringApbd;
use App\Repositories\BaseRepository;

/**
 * Class MonitoringApbdRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:33 pm UTC
*/

class MonitoringApbdRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'belanja_daerah',
        'belanja_pegawai',
        'belanja_barjas',
        'belanja_modal',
        'belanja_modal_jalan',
        'belanja_hibah',
        'belanja_lainnya',
        'pendapatan_daerah',
        'pendapatan_pad',
        'pendapatan_transfer',
        'pendapatan_lainnya',
        'penerimaan_pembiayaan',
        'pengeluaran_pembiayaan',
        'silpa',
        'silpa_tkd'
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
        return MonitoringApbd::class;
    }
}
