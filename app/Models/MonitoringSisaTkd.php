<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MonitoringSisaTkd
 * @package App\Models
 * @version September 10, 2024, 1:31 pm WIB
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $tipe_tkd
 * @property string $bidang_tkd
 * @property string $subbidang_tkd
 * @property string $uraian
 * @property number $sisa_dana_tkd
 * @property number $dianggarkan_kembali
 * @property number $tidak_dianggarkan_kembali
 * @property string $penyebab
 */
class MonitoringSisaTkd extends Model
{

    use HasFactory;

    public $table = 'mon_sisa_dana';
    
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
        'sisa_dana_tkd',
        'dianggarkan_kembali',
        'tidak_dianggarkan_kembali',
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
        'tipe_tkd' => 'string',
        'bidang_tkd' => 'string',
        'subbidang_tkd' => 'string',
        'uraian' => 'string',
        'sisa_dana_tkd' => 'decimal:2',
        'dianggarkan_kembali' => 'decimal:2',
        'tidak_dianggarkan_kembali' => 'decimal:2',
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
        'tipe_tkd' => 'nullable|string|max:255',
        'bidang_tkd' => 'nullable|string|max:255',
        'subbidang_tkd' => 'nullable|string|max:255',
        'uraian' => 'nullable|string|max:255',
        'sisa_dana_tkd' => 'nullable|numeric',
        'dianggarkan_kembali' => 'nullable|numeric',
        'tidak_dianggarkan_kembali' => 'nullable|numeric',
        'penyebab' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
