<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MonitoringTl
 * @package App\Models
 * @version February 25, 2024, 7:35 pm UTC
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $kelompok_permasalahan
 * @property string $uraian_permasalahan
 * @property number $nilai_permasalahan
 * @property string $uraian_rekomendasi
 * @property string $uraian_tl
 * @property number $nilai_tl
 * @property string $simpulan_tl
 */
class MonitoringTl extends Model
{

    use HasFactory;

    public $table = 'mon_tl';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'kelompok_permasalahan',
        'uraian_permasalahan',
        'nilai_permasalahan',
        'uraian_rekomendasi',
        'uraian_tl',
        'nilai_tl',
        'simpulan_tl'
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
        'kelompok_permasalahan' => 'string',
        'uraian_permasalahan' => 'string',
        'nilai_permasalahan' => 'decimal:2',
        'uraian_rekomendasi' => 'string',
        'uraian_tl' => 'string',
        'nilai_tl' => 'decimal:2',
        'simpulan_tl' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'uraian_permasalahan' => 'required|string',
        'uraian_rekomendasi' => 'required|string',
        'uraian_tl' => 'required|string',
        'simpulan_tl' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function st()
    {
        return $this->belongsTo(\App\Models\SuratTugas::class, 'nama_pemda', 'nama_pemda');
    }
}
