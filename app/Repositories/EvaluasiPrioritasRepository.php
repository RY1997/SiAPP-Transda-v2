<?php

namespace App\Repositories;

use App\Models\EvaluasiPrioritas;
use App\Repositories\BaseRepository;

/**
 * Class EvaluasiPrioritasRepository
 * @package App\Repositories
 * @version September 8, 2024, 10:30 pm WIB
*/

class EvaluasiPrioritasRepository extends BaseRepository
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
        'anggaran_tkd',
        'nama_skpd',
        'nama_program',
        'nama_kegiatan',
        'nilai_anggaran',
        'nilai_realisasi',
        'prioritas_kegiatan',
        'prioritas_penggunaan',
        'pemanfaatan_kegiatan'
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
        return EvaluasiPrioritas::class;
    }
}
