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
class MonitoringPenggunaan extends Model
{

    use HasFactory;

    public $table = 'mon_penggunaan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'bidang_tkd',
        'tipe_tkd',
        'anggaran_tkd',
        'realisasi_tkd',
        'penyebab_kurang_guna'
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
        'tipe_tkd' => 'string',
        'anggaran_tkd' => 'decimal:2',
        'realisasi_tkd' => 'decimal:2',
        'penyebab_kurang_guna' => 'string'
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
        'anggaran_tkd' => 'required|numeric',
        'realisasi_tkd' => 'required|numeric',
        'penyebab_kurang_guna' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
