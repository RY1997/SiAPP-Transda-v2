<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ParameterIndikator
 * @package App\Models
 * @version February 25, 2024, 7:24 pm UTC
 *
 * @property string $jenis_tkd
 * @property string $bidang_tkd
 * @property string $uraian_indikator
 * @property string $satuan_indikator
 */
class ParameterIndikator extends Model
{
    use HasFactory;

    public $table = 'pm_indikator';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'jenis_tkd',
        'bidang_tkd',
        'uraian_indikator',
        'satuan_indikator'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jenis_tkd' => 'string',
        'bidang_tkd' => 'string',
        'uraian_indikator' => 'string',
        'satuan_indikator' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jenis_tkd' => 'required|string|max:255',
        'bidang_tkd' => 'required|string|max:255',
        'uraian_indikator' => 'required|string|max:255',
        'satuan_indikator' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
