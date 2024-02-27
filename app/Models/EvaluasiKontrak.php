<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EvaluasiKontrak
 * @package App\Models
 * @version February 25, 2024, 7:36 pm UTC
 *
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $tahun
 * @property string $jenis_tkd
 * @property string $nomor_kontrak
 * @property string $tanggal_kontrak
 * @property string $uraian_kontrak
 * @property string $program
 * @property string $kegiatan
 * @property integer $target_output
 * @property string $satuan_output
 * @property string $jenis_kontrak
 * @property string $lokasi
 * @property string $nama_opd
 * @property string $nama_rekanan
 * @property string $tgl_lelang
 * @property string $masa_kontrak
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 * @property number $nilai_kontrak
 * @property number $sisa_nilai_kontrak
 * @property string $penyebab_pembayaran
 * @property string $no_bast
 * @property string $tgl_bast
 * @property string $realisasi_bast
 * @property string $persen_fisik
 * @property string $penyebab_realisasi
 * @property string $uji_petik
 * @property string $keterangan
 * @property integer $target_omspan
 * @property integer $target_auditor
 * @property integer $realisasi_omspan
 * @property integer $realisasi_auditor
 * @property integer $fisik_omspan
 * @property integer $fisik_auditor
 * @property number $nilai_laporan
 * @property number $nilai_auditor
 * @property string $masalah_pelaksanaan
 * @property number $masalah1
 * @property string $uraian_masalah1
 * @property number $masalah2
 * @property string $uraian_masalah2
 * @property number $masalah3
 * @property string $uraian_masalah3
 * @property number $masalah4
 * @property string $uraian_masalah4
 * @property number $masalah5
 * @property string $uraian_masalah5
 * @property number $masalah6
 * @property string $uraian_masalah6
 * @property number $masalah7
 * @property string $uraian_masalah7
 * @property number $masalah8
 * @property string $uraian_masalah8
 * @property string $masalah_pemanfaatan
 * @property number $manfaat1
 * @property string $uraian_manfaat1
 * @property number $manfaat2
 * @property string $uraian_manfaat2
 * @property number $manfaat3
 * @property string $uraian_manfaat3
 * @property number $manfaat4
 * @property string $uraian_manfaat4
 * @property number $manfaat5
 * @property string $uraian_manfaat5
 * @property number $manfaat6
 * @property string $uraian_manfaat6
 * @property number $manfaat7
 * @property string $uraian_manfaat7
 * @property number $manfaat8
 * @property string $uraian_manfaat8
 */
class EvaluasiKontrak extends Model
{

    use HasFactory;

    public $table = 'eva_kontrak';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode_pwk' => 'string',
        'nama_pemda' => 'string',
        'tahun' => 'string',
        'jenis_tkd' => 'string',
        'nomor_kontrak' => 'string',
        'tanggal_kontrak' => 'date',
        'uraian_kontrak' => 'string',
        'program' => 'string',
        'kegiatan' => 'string',
        'target_output' => 'integer',
        'satuan_output' => 'string',
        'jenis_kontrak' => 'string',
        'lokasi' => 'string',
        'nama_opd' => 'string',
        'nama_rekanan' => 'string',
        'tgl_lelang' => 'string',
        'masa_kontrak' => 'string',
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
        'nilai_kontrak' => 'decimal:2',
        'sisa_nilai_kontrak' => 'decimal:2',
        'penyebab_pembayaran' => 'string',
        'no_bast' => 'string',
        'tgl_bast' => 'date',
        'realisasi_bast' => 'string',
        'persen_fisik' => 'string',
        'penyebab_realisasi' => 'string',
        'uji_petik' => 'string',
        'keterangan' => 'string',
        'target_omspan' => 'integer',
        'target_auditor' => 'integer',
        'realisasi_omspan' => 'integer',
        'realisasi_auditor' => 'integer',
        'fisik_omspan' => 'integer',
        'fisik_auditor' => 'integer',
        'nilai_laporan' => 'decimal:2',
        'nilai_auditor' => 'decimal:2',
        'masalah_pelaksanaan' => 'string',
        'masalah1' => 'decimal:2',
        'uraian_masalah1' => 'string',
        'masalah2' => 'decimal:2',
        'uraian_masalah2' => 'string',
        'masalah3' => 'decimal:2',
        'uraian_masalah3' => 'string',
        'masalah4' => 'decimal:2',
        'uraian_masalah4' => 'string',
        'masalah5' => 'decimal:2',
        'uraian_masalah5' => 'string',
        'masalah6' => 'decimal:2',
        'uraian_masalah6' => 'string',
        'masalah7' => 'decimal:2',
        'uraian_masalah7' => 'string',
        'masalah8' => 'decimal:2',
        'uraian_masalah8' => 'string',
        'masalah_pemanfaatan' => 'string',
        'manfaat1' => 'decimal:2',
        'uraian_manfaat1' => 'string',
        'manfaat2' => 'decimal:2',
        'uraian_manfaat2' => 'string',
        'manfaat3' => 'decimal:2',
        'uraian_manfaat3' => 'string',
        'manfaat4' => 'decimal:2',
        'uraian_manfaat4' => 'string',
        'manfaat5' => 'decimal:2',
        'uraian_manfaat5' => 'string',
        'manfaat6' => 'decimal:2',
        'uraian_manfaat6' => 'string',
        'manfaat7' => 'decimal:2',
        'uraian_manfaat7' => 'string',
        'manfaat8' => 'decimal:2',
        'uraian_manfaat8' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode_pwk' => 'nullable|string|max:255',
        'nama_pemda' => 'required|string|max:255',
        'tahun' => 'required|string|max:255',
        'jenis_tkd' => 'nullable|string|max:255',
        'nomor_kontrak' => 'required|string|max:255',
        'tanggal_kontrak' => 'required',
        'uraian_kontrak' => 'required|string',
        'program' => 'required|string',
        'kegiatan' => 'required|string',
        'target_output' => 'nullable|integer',
        'satuan_output' => 'nullable|string|max:255',
        'jenis_kontrak' => 'nullable|string',
        'lokasi' => 'required|string',
        'nama_opd' => 'nullable|string',
        'nama_rekanan' => 'nullable|string',
        'tgl_lelang' => 'nullable|string',
        'masa_kontrak' => 'required|string|max:255',
        'tanggal_mulai' => 'required',
        'tanggal_selesai' => 'required',
        'nilai_kontrak' => 'required|numeric',
        'sisa_nilai_kontrak' => 'required|numeric',
        'penyebab_pembayaran' => 'nullable|string',
        'no_bast' => 'nullable|string',
        'tgl_bast' => 'nullable',
        'realisasi_bast' => 'nullable|string',
        'persen_fisik' => 'nullable|string',
        'penyebab_realisasi' => 'nullable|string',
        'uji_petik' => 'required|string|max:255',
        'keterangan' => 'nullable|string',
        'target_omspan' => 'nullable|integer',
        'target_auditor' => 'nullable|integer',
        'realisasi_omspan' => 'nullable|integer',
        'realisasi_auditor' => 'nullable|integer',
        'fisik_omspan' => 'nullable|integer',
        'fisik_auditor' => 'nullable|integer',
        'nilai_laporan' => 'nullable|numeric',
        'nilai_auditor' => 'nullable|numeric',
        'masalah_pelaksanaan' => 'nullable|string|max:255',
        'masalah1' => 'nullable|numeric',
        'uraian_masalah1' => 'nullable|string',
        'masalah2' => 'nullable|numeric',
        'uraian_masalah2' => 'nullable|string',
        'masalah3' => 'nullable|numeric',
        'uraian_masalah3' => 'nullable|string',
        'masalah4' => 'nullable|numeric',
        'uraian_masalah4' => 'nullable|string',
        'masalah5' => 'nullable|numeric',
        'uraian_masalah5' => 'nullable|string',
        'masalah6' => 'nullable|numeric',
        'uraian_masalah6' => 'nullable|string',
        'masalah7' => 'nullable|numeric',
        'uraian_masalah7' => 'nullable|string',
        'masalah8' => 'nullable|numeric',
        'uraian_masalah8' => 'nullable|string',
        'masalah_pemanfaatan' => 'nullable|string|max:255',
        'manfaat1' => 'nullable|numeric',
        'uraian_manfaat1' => 'nullable|string',
        'manfaat2' => 'nullable|numeric',
        'uraian_manfaat2' => 'nullable|string',
        'manfaat3' => 'nullable|numeric',
        'uraian_manfaat3' => 'nullable|string',
        'manfaat4' => 'nullable|numeric',
        'uraian_manfaat4' => 'nullable|string',
        'manfaat5' => 'nullable|numeric',
        'uraian_manfaat5' => 'nullable|string',
        'manfaat6' => 'nullable|numeric',
        'uraian_manfaat6' => 'nullable|string',
        'manfaat7' => 'nullable|numeric',
        'uraian_manfaat7' => 'nullable|string',
        'manfaat8' => 'nullable|numeric',
        'uraian_manfaat8' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
