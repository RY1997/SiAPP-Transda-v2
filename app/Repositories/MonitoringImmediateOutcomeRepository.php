<?php

namespace App\Repositories;

use App\Models\MonitoringImmediateOutcome;
use App\Repositories\BaseRepository;

/**
 * Class MonitoringImmediateOutcomeRepository
 * @package App\Repositories
 * @version September 9, 2024, 9:41 pm WIB
*/

class MonitoringImmediateOutcomeRepository extends BaseRepository
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
        'subbidang_tkd',
        'keberadaan_io',
        'target',
        'capaian',
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
        return MonitoringImmediateOutcome::class;
    }
}
