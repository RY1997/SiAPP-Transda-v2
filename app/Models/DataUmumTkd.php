<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataUmumTkd
 * @package App\Models
 * @version September 13, 2024, 3:42 pm WIB
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $tipe_tkd
 * @property string $bidang_tkd
 * @property string $subbidang_tkd
 * @property string $uraian
 * @property number $alokasi_tkd
 * @property number $penyaluran_tkd
 * @property number $penganggaran_tkd
 * @property number $penggunaan_tkd
 */
class DataUmumTkd extends Model
{

    use HasFactory;

    public $table = 'data_umum_tkd';
    
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
        'alokasi_tkd',
        'penyaluran_tkd',
        'penganggaran_tkd',
        'penggunaan_tkd'
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
        'alokasi_tkd' => 'decimal:2',
        'penyaluran_tkd' => 'decimal:2',
        'penganggaran_tkd' => 'decimal:2',
        'penggunaan_tkd' => 'decimal:2'
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
        'alokasi_tkd' => 'nullable|numeric',
        'penyaluran_tkd' => 'nullable|numeric',
        'penganggaran_tkd' => 'nullable|numeric',
        'penggunaan_tkd' => 'nullable|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function st()
    {
        return $this->belongsTo(\App\Models\SuratTugas::class, 'nama_pemda', 'nama_pemda');
    }

    
}
