<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MonitoringPenggunaan
 * @package App\Models
 * @version February 25, 2024, 7:34 pm UTC
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $bidang_tkd
 * @property string $alokasi_id
 * @property number $penggunaan_tkd
 * @property string $penyebab_kurang_guna
 */
class EvaluasiPenggunaan extends Model
{

    use HasFactory;

    public $table = 'eva_penggunaan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'tipe_tkd',
        'bidang_tkd',
        'subbidang_tkd',
        'uraian',
        'jml_kontrak',
        'nilai_kontrak',
        'anggaran_barjas',
        'anggaran_pegawai',
        'anggaran_modal',
        'anggaran_hibah',
        'anggaran_lainnya',
        'anggaran_na',
        'realisasi_barjas',
        'realisasi_pegawai',
        'realisasi_modal',
        'realisasi_hibah',
        'realisasi_lainnya',
        'realisasi_na',
        'penyebab_kurang_guna',
        'target_output',
        'capaian_output',
        'jenis_eksternalitas',
        'dampak_eksternalitas'
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
        'jenis_tkd' => 'string',
        'tipe_tkd' => 'string',
        'bidang_tkd' => 'string',
        'subbidang_tkd' => 'string',
        'uraian' => 'string',
        'jml_kontrak' => 'integer',
        'nilai_kontrak' => 'decimal:2',
        'anggaran_barjas' => 'decimal:2',
        'anggaran_pegawai' => 'decimal:2',
        'anggaran_modal' => 'decimal:2',
        'anggaran_hibah' => 'decimal:2',
        'anggaran_lainnya' => 'decimal:2',
        'anggaran_na' => 'decimal:2',
        'realisasi_barjas' => 'decimal:2',
        'realisasi_pegawai' => 'decimal:2',
        'realisasi_modal' => 'decimal:2',
        'realisasi_hibah' => 'decimal:2',
        'realisasi_lainnya' => 'decimal:2',
        'realisasi_na' => 'decimal:2',
        'penyebab_kurang_guna' => 'string',
        'target_output' => 'decimal:2',
        'capaian_output' => 'decimal:2',
        'jenis_eksternalitas' => 'string',
        'dampak_eksternalitas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tahun' => 'nullable|string|max:255',
        'kode_pwk' => 'nullable|string|max:255',
        'nama_pemda' => 'nullable|string|max:255',
        'jenis_tkd' => 'nullable|string|max:255',
        'tipe_tkd' => 'nullable|string|max:255',
        'bidang_tkd' => 'nullable|string|max:255',
        'subbidang_tkd' => 'nullable|string|max:255',
        'uraian' => 'nullable|string|max:255',
        'jml_kontrak' => 'nullable|numeric',
        'nilai_kontrak' => 'nullable|numeric',
        'anggaran_barjas' => 'nullable|numeric',
        'anggaran_pegawai' => 'nullable|numeric',
        'anggaran_modal' => 'nullable|numeric',
        'anggaran_hibah' => 'nullable|numeric',
        'anggaran_lainnya' => 'nullable|numeric',
        'anggaran_na' => 'nullable|numeric',
        'realisasi_barjas' => 'nullable|numeric',
        'realisasi_pegawai' => 'nullable|numeric',
        'realisasi_modal' => 'nullable|numeric',
        'realisasi_hibah' => 'nullable|numeric',
        'realisasi_lainnya' => 'nullable|numeric',
        'realisasi_na' => 'nullable|numeric',
        'penyebab_kurang_guna' => 'nullable|string',
        'target_output' => 'nullable|numeric',
        'capaian_output' => 'nullable|numeric',
        'jenis_eksternalitas' => 'nullable|string',
        'dampak_eksternalitas' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
