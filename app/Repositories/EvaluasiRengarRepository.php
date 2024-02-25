<?php

namespace App\Repositories;

use App\Models\EvaluasiRengar;
use App\Repositories\BaseRepository;

/**
 * Class EvaluasiRengarRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:36 pm UTC
*/

class EvaluasiRengarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'kode_program',
        'nama_program',
        'kode_kegiatan',
        'nama_kegiatan',
        'kode_subkegiatan',
        'nama_subkegiatan',
        'sumber_dana',
        'kode_akun_utama',
        'nama_akun_utama',
        'kode_akun_kelompok',
        'nama_akun_kelompok',
        'kode_akun_jenis',
        'nama_akun_jenis',
        'kode_akun_objek',
        'nama_akun_objek',
        'kode_akun_subrinci',
        'nama_akun_subrinci',
        'nilai_anggaran',
        'urusan_subkegiatan',
        'nilai_realisasi',
        'relevansi_subkegiatan',
        'pelaksanaan_subkegiatan'
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
        return EvaluasiRengar::class;
    }
}
