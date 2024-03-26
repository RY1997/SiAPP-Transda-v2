<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EvaluasiRengar
 * @package App\Models
 * @version February 25, 2024, 7:36 pm UTC
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $kode_program
 * @property string $nama_program
 * @property string $kode_kegiatan
 * @property string $nama_kegiatan
 * @property string $kode_subkegiatan
 * @property string $nama_subkegiatan
 * @property string $sumber_dana
 * @property string $kode_akun_utama
 * @property string $nama_akun_utama
 * @property string $kode_akun_kelompok
 * @property string $nama_akun_kelompok
 * @property string $kode_akun_jenis
 * @property string $nama_akun_jenis
 * @property string $kode_akun_objek
 * @property string $nama_akun_objek
 * @property string $kode_akun_subrinci
 * @property string $nama_akun_subrinci
 * @property number $nilai_anggaran
 * @property string $urusan_subkegiatan
 * @property number $nilai_realisasi
 * @property string $relevansi_subkegiatan
 * @property string $pelaksanaan_subkegiatan
 */
class EvaluasiRengar extends Model
{

    use HasFactory;

    public $table = 'eva_rengar';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nilai_anggaran',
        'urusan_subkegiatan',
        'nilai_realisasi',
        'relevansi_subkegiatan',
        'pelaksanaan_subkegiatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tahun' => 'string',
        'kode_pwk' => 'string',
        'nama_pemda' => 'string',
        'kode_program' => 'string',
        'nama_program' => 'string',
        'kode_kegiatan' => 'string',
        'nama_kegiatan' => 'string',
        'kode_subkegiatan' => 'string',
        'nama_subkegiatan' => 'string',
        'sumber_dana' => 'string',
        'kode_akun_utama' => 'string',
        'nama_akun_utama' => 'string',
        'kode_akun_kelompok' => 'string',
        'nama_akun_kelompok' => 'string',
        'kode_akun_jenis' => 'string',
        'nama_akun_jenis' => 'string',
        'kode_akun_objek' => 'string',
        'nama_akun_objek' => 'string',
        'kode_akun_subrinci' => 'string',
        'nama_akun_subrinci' => 'string',
        'nilai_anggaran' => 'decimal:2',
        'urusan_subkegiatan' => 'string',
        'nilai_realisasi' => 'decimal:2',
        'relevansi_subkegiatan' => 'string',
        'pelaksanaan_subkegiatan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [        
        'urusan_subkegiatan' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
