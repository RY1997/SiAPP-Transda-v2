<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MonitoringImmediateOutcome
 * @package App\Models
 * @version September 9, 2024, 9:41 pm WIB
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $bidang_tkd
 * @property string $subbidang_tkd
 * @property string $keberadaan_io
 * @property number $target
 * @property number $capaian
 * @property string $penyebab
 */
class MonitoringImmediateOutcome extends Model
{

    use HasFactory;

    public $table = 'mon_immediate_outcome';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'bidang_tkd',
        'subbidang_tkd',
        'keberadaan_io',
        'target',
        'capaian',
        'penyebab'
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
        'keberadaan_io' => 'string',
        'target' => 'decimal:2',
        'capaian' => 'decimal:2',
        'penyebab' => 'string'
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
        'bidang_tkd' => 'nullable|string|max:255',
        'subbidang_tkd' => 'nullable|string|max:255',
        'keberadaan_io' => 'nullable|string|max:255',
        'target' => 'nullable|numeric',
        'capaian' => 'nullable|numeric',
        'penyebab' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
