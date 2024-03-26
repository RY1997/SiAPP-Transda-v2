<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class RippOtsus
 * @package App\Models
 * @version February 25, 2024, 7:40 pm UTC
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $item_ripp
 * @property string $uraian_ripp
 * @property string $penyebab_ripp
 */
class RippOtsus extends Model
{

    use HasFactory;

    public $table = 'otsus_ripp';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'item_ripp',
        'uraian_ripp',
        'penyebab_ripp'
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
        'item_ripp' => 'string',
        'uraian_ripp' => 'string',
        'penyebab_ripp' => 'string'
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
        'item_ripp' => 'nullable|string',
        'uraian_ripp' => 'nullable|string',
        'penyebab_ripp' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
