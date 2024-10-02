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
        'subbidang_tkd',
        'uraian',
        'status_pemda',
        'rk_usulan',
        'rk_disetujui',
        'tgl_juknis',
        'alokasi_tkd',
        'alokasi_tkd_sebelumnya',
        'penyebab_tidak_tepat_jumlah'
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
        'status_pemda' => 'string',
        'rk_usulan' => 'decimal:2',
        'rk_disetujui' => 'decimal:2',
        'tgl_juknis' => 'date',
        'alokasi_tkd' => 'decimal:2',
        'alokasi_tkd_sebelumnya' => 'decimal:2',
        'penyebab_tidak_tepat_jumlah' => 'string',
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
        'status_pemda' => 'nullable|string|max:255',
        'rk_usulan' => 'nullable|numeric',
        'rk_disetujui' => 'nullable|numeric',
        'tgl_juknis' => 'nullable',
        'alokasi_tkd' => 'nullable|numeric',
        'alokasi_tkd_sebelumnya' => 'nullable|numeric',
        'penyebab_tidak_tepat_jumlah' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function st()
    {
        return $this->belongsTo(\App\Models\SuratTugas::class, 'nama_pemda', 'nama_pemda');
    }

    public function penyaluran()
    {
        return $this->hasMany(\App\Models\MonitoringPenyaluran::class, 'nama_pemda', 'nama_pemda');
    }

    public function penggunaan()
    {
        return $this->hasMany(\App\Models\MonitoringPenggunaan::class, 'nama_pemda', 'nama_pemda');
    }

    
}
