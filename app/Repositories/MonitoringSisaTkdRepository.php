<?php

namespace App\Repositories;

use App\Models\MonitoringSisaTkd;
use App\Repositories\BaseRepository;

/**
 * Class MonitoringSisaTkdRepository
 * @package App\Repositories
 * @version September 10, 2024, 1:31 pm WIB
*/

class MonitoringSisaTkdRepository extends BaseRepository
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
        'sisa_dana_tkd',
        'dianggarkan_kembali',
        'tidak_dianggarkan_kembali',
        'penyebab'
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
        return MonitoringSisaTkd::class;
    }
}
