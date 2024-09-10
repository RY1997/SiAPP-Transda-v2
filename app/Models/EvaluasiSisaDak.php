<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EvaluasiSisaDak
 * @package App\Models
 * @version September 9, 2024, 2:33 am WIB
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $bidang_tkd
 * @property number $nilai_penyaluran
 * @property number $nilai_penggunaan
 * @property number $sisa_dak_sebelumnya
 * @property number $penganggaran_bidang_sama
 * @property number $penganggaran_bidang_lainnya
 */
class EvaluasiSisaDak extends Model
{

    use HasFactory;

    public $table = 'dak_sisa_dana';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'bidang_tkd',
        'nilai_penyaluran',
        'nilai_penggunaan',
        'sisa_dak_sebelumnya',
        'penganggaran_bidang_sama',
        'penganggaran_bidang_lainnya'
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
        'bidang_tkd' => 'string',
        'nilai_penyaluran' => 'decimal:2',
        'nilai_penggunaan' => 'decimal:2',
        'sisa_dak_sebelumnya' => 'decimal:2',
        'penganggaran_bidang_sama' => 'decimal:2',
        'penganggaran_bidang_lainnya' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tahun' => 'nullable|string|max:255',
        'kode_pwk' => 'required|string|max:255',
        'nama_pemda' => 'required|string|max:255',
        'jenis_tkd' => 'nullable|string|max:255',
        'bidang_tkd' => 'nullable|string|max:255',
        'nilai_penyaluran' => 'nullable|numeric',
        'nilai_penggunaan' => 'nullable|numeric',
        'sisa_dak_sebelumnya' => 'nullable|numeric',
        'penganggaran_bidang_sama' => 'nullable|numeric',
        'penganggaran_bidang_lainnya' => 'nullable|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
