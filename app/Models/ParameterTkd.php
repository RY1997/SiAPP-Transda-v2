<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ParameterTkd
 * @package App\Models
 * @version February 25, 2024, 7:23 pm UTC
 *
 * @property string $jenis_tkd
 * @property string $bidang_tkd
 * @property number $alokasi_minimal
 */
class ParameterTkd extends Model
{
    use HasFactory;

    public $table = 'pm_tkd';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'jenis_tkd',
        'tipe_tkd',
        'bidang_tkd',
        'subbidang_tkd',
        'mon_penyaluran',
        'eva_penyaluran',
        'mon_penggunaan',
        'eva_penggunaan',
        'alokasi_minimal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jenis_tkd' => 'string',
        'tipe_tkd' => 'string',
        'bidang_tkd' => 'string',
        'subbidang_tkd' => 'string',
        'mon_penyaluran' => 'string',
        'eva_penyaluran' => 'string',
        'mon_penggunaan' => 'string',
        'eva_penggunaan' => 'string',
        'alokasi_minimal' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jenis_tkd' => 'required|string|max:255',
        'bidang_tkd' => 'required|string|max:255',
        'alokasi_minimal' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
