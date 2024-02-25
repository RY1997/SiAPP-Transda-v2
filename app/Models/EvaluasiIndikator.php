<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EvaluasiIndikator
 * @package App\Models
 * @version February 25, 2024, 7:37 pm UTC
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $uraian_indikator
 * @property integer $target
 * @property integer $realisasi
 * @property string $cutoff_capaian
 * @property string $sumber_data
 * @property string $keterangan
 */
class EvaluasiIndikator extends Model
{

    use HasFactory;

    public $table = 'eva_indikator';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'uraian_indikator',
        'target',
        'realisasi',
        'cutoff_capaian',
        'sumber_data',
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
        'nama_pemda' => 'string',
        'uraian_indikator' => 'string',
        'target' => 'integer',
        'realisasi' => 'integer',
        'cutoff_capaian' => 'date',
        'sumber_data' => 'string',
        'keterangan' => 'string'
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
        'uraian_indikator' => 'nullable|string|max:255',
        'target' => 'nullable|integer',
        'realisasi' => 'nullable|integer',
        'cutoff_capaian' => 'nullable',
        'sumber_data' => 'required|string|max:255',
        'keterangan' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
