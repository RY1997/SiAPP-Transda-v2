<?php

namespace App\Repositories;

use App\Models\MonitoringPenggunaan;
use App\Repositories\BaseRepository;

/**
 * Class MonitoringPenggunaanRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:34 pm UTC
*/

class MonitoringPenggunaanRepository extends BaseRepository
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
        'alokasi_id',
        'anggaran_barjas',
        'anggaran_pegawai',
        'anggaran_modal',
        'anggaran_hibah',
        'anggaran_lainnya',
        'realisasi_barjas',
        'realisasi_pegawai',
        'realisasi_modal',
        'realisasi_hibah',
        'realisasi_lainnya',
        'penyebab_kurang_guna'
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
        return MonitoringPenggunaan::class;
    }
}
