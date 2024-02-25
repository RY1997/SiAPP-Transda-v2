<?php

namespace App\Repositories;

use App\Models\MonitoringTl;
use App\Repositories\BaseRepository;

/**
 * Class MonitoringTlRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:35 pm UTC
*/

class MonitoringTlRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'kelompok_permasalahan',
        'uraian_permasalahan',
        'nilai_permasalahan',
        'uraian_rekomendasi',
        'uraian_tl',
        'nilai_tl',
        'simpulan_tl'
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
        return MonitoringTl::class;
    }
}
