<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MonitoringIndikatorMakro
 * @package App\Models
 * @version September 8, 2024, 10:27 am WIB
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $jenis_tkd
 * @property string $nama_pemda
 * @property string $batas_indikator
 * @property string $uraian_indikator
 * @property string $capaian_1
 * @property string $capaian_2
 * @property string $capaian_3
 * @property string $capaian_4
 * @property string $keterangan
 */
class MonitoringIndikatorMakro extends Model
{

    use HasFactory;

    public $table = 'mon_indikator_makro';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'jenis_tkd',
        'nama_pemda',
        'batas_indikator',
        'uraian_indikator',
        'capaian_1',
        'capaian_2',
        'capaian_3',
        'capaian_4',
        'keterangan'
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
        'jenis_tkd' => 'string',
        'nama_pemda' => 'string',
        'batas_indikator' => 'string',
        'uraian_indikator' => 'string',
        'capaian_1' => 'decimal:3',
        'capaian_2' => 'decimal:3',
        'capaian_3' => 'decimal:3',
        'capaian_4' => 'decimal:3',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tahun' => 'nullable|string|max:255',
        'kode_pwk' => 'nullable|string|max:255',
        'jenis_tkd' => 'nullable|string|max:255',
        'nama_pemda' => 'nullable|string|max:255',
        'batas_indikator' => 'nullable|string|max:255',
        'uraian_indikator' => 'nullable|string|max:255',
        'capaian_1' => 'nullable|numeric',
        'capaian_2' => 'nullable|numeric',
        'capaian_3' => 'nullable|numeric',
        'capaian_4' => 'nullable|numeric',
        'keterangan' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
