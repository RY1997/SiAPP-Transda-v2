<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MonitoringAlokasi
 * @package App\Models
 * @version February 25, 2024, 7:34 pm UTC
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $tipe_tkd
 * @property string $bidang_tkd
 * @property number $alokasi_tkd
 */
class MonitoringAlokasi extends Model
{

    use HasFactory;

    public $table = 'mon_alokasi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'tipe_tkd',
        'bidang_tkd',
        'alokasi_tkd'
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
        'alokasi_tkd' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tahun' => 'required|string|max:255',
        'kode_pwk' => 'nullable|string|max:255',
        'nama_pemda' => 'required|string|max:255',
        'jenis_tkd' => 'nullable|string|max:255',
        'tipe_tkd' => 'required|string|max:255',
        'bidang_tkd' => 'required|string|max:255',
        'alokasi_tkd' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function penyaluran()
    {
        return $this->hasMany(\App\Models\MonitoringPenyaluran::class, 'nama_pemda', 'nama_pemda');
    }

    public function penggunaan()
    {
        return $this->hasMany(\App\Models\MonitoringPenggunaan::class, 'nama_pemda', 'nama_pemda');
    }

    
}
