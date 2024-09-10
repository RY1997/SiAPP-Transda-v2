<?php

namespace App\Repositories;

use App\Models\EvaluasiImmediateOutcome;
use App\Repositories\BaseRepository;

/**
 * Class EvaluasiImmediateOutcomeRepository
 * @package App\Repositories
 * @version September 9, 2024, 2:34 am WIB
*/

class EvaluasiImmediateOutcomeRepository extends BaseRepository
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
        'uraian_indikator',
        'target',
        'capaian',
        'satuan',
        'keterangan',
        'kendala'
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
        return EvaluasiImmediateOutcome::class;
    }
}
