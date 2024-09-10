<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EvaluasiImmediateOutcome
 * @package App\Models
 * @version September 9, 2024, 2:34 am WIB
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $bidang_tkd
 * @property string $subbidang_tkd
 * @property string $uraian_indikator
 * @property string $target
 * @property string $capaian
 * @property string $satuan
 * @property string $keterangan
 * @property string $kendala
 */
class EvaluasiImmediateOutcome extends Model
{

    use HasFactory;

    public $table = 'dak_immediate_outcome';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
        'subbidang_tkd' => 'string',
        'uraian_indikator' => 'string',
        'target' => 'decimal:2',
        'capaian' => 'decimal:2',
        'satuan' => 'string',
        'keterangan' => 'string',
        'kendala' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tahun' => 'required|string|max:255',
        'kode_pwk' => 'required|string|max:255',
        'nama_pemda' => 'required|string|max:255',
        'jenis_tkd' => 'nullable|string|max:255',
        'bidang_tkd' => 'nullable|string|max:255',
        'subbidang_tkd' => 'nullable|string|max:255',
        'uraian_indikator' => 'nullable|string',
        'target' => 'nullable|numeric',
        'capaian' => 'nullable|numeric',
        'satuan' => 'nullable|string|max:255',
        'keterangan' => 'nullable|string',
        'kendala' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
