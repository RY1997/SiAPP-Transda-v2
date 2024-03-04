<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SilpaOtsus
 * @package App\Models
 * @version February 25, 2024, 7:41 pm UTC
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property number $nilai_silpa
 * @property number $dianggarkan_relevan
 * @property number $dianggarkan_tidak_relevan
 * @property number $tidak_dianggarkan
 */
class SilpaOtsus extends Model
{

    use HasFactory;

    public $table = 'otsus_silpa';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'nilai_silpa',
        'dianggarkan_relevan',
        'dianggarkan_tidak_relevan',
        'tidak_dianggarkan'
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
        'nilai_silpa' => 'decimal:2',
        'dianggarkan_relevan' => 'decimal:2',
        'dianggarkan_tidak_relevan' => 'decimal:2',
        'tidak_dianggarkan' => 'decimal:2'
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
        'nilai_silpa' => 'required|numeric',
        'dianggarkan_relevan' => 'nullable|numeric',
        'dianggarkan_tidak_relevan' => 'nullable|numeric',
        'tidak_dianggarkan' => 'nullable|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
