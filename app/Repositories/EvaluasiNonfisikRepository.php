<?php

namespace App\Repositories;

use App\Models\EvaluasiNonfisik;
use App\Repositories\BaseRepository;

/**
 * Class EvaluasiKontrakRepository
 * @package App\Repositories
 * @version February 25, 2024, 7:36 pm UTC
*/

class EvaluasiNonfisikRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_pwk',
        'nama_pemda',
        'tahun',
        'jenis_tkd',
        'nomor_kontrak',
        'tanggal_kontrak',
        'uraian_kontrak',
        'program',
        'kegiatan',
        'target_output',
        'satuan_output',
        'jenis_kontrak',
        'lokasi',
        'nama_opd',
        'nama_rekanan',
        'tgl_lelang',
        'masa_kontrak',
        'tanggal_mulai',
        'tanggal_selesai',
        'nilai_kontrak',
        'sisa_nilai_kontrak',
        'penyebab_pembayaran',
        'no_bast',
        'tgl_bast',
        'realisasi_bast',
        'persen_fisik',
        'penyebab_realisasi',
        'uji_petik',
        'keterangan',
        'target_omspan',
        'target_auditor',
        'realisasi_omspan',
        'realisasi_auditor',
        'fisik_omspan',
        'fisik_auditor',
        'nilai_laporan',
        'nilai_auditor',
        'masalah_pelaksanaan',
        'masalah1',
        'uraian_masalah1',
        'masalah2',
        'uraian_masalah2',
        'masalah3',
        'uraian_masalah3',
        'masalah4',
        'uraian_masalah4',
        'masalah5',
        'uraian_masalah5',
        'masalah6',
        'uraian_masalah6',
        'masalah7',
        'uraian_masalah7',
        'masalah8',
        'uraian_masalah8',
        'masalah_pemanfaatan',
        'manfaat1',
        'uraian_manfaat1',
        'manfaat2',
        'uraian_manfaat2',
        'manfaat3',
        'uraian_manfaat3',
        'manfaat4',
        'uraian_manfaat4',
        'manfaat5',
        'uraian_manfaat5',
        'manfaat6',
        'uraian_manfaat6',
        'manfaat7',
        'uraian_manfaat7',
        'manfaat8',
        'uraian_manfaat8'
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
        return EvaluasiNonfisik::class;
    }
}
