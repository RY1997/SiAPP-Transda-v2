<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class KebijakanOtsus
 * @package App\Models
 * @version February 25, 2024, 7:39 pm UTC
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $dasar_penetapan
 * @property string $tgl_penetapan
 * @property string $simpulan_penetapan
 */
class KebijakanOtsus extends Model
{

    use HasFactory;

    public $table = 'otsus_kebijakan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'dasar_penetapan',
        'tgl_penetapan',
        'simpulan_penetapan'
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
        'dasar_penetapan' => 'string',
        'tgl_penetapan' => 'date',
        'simpulan_penetapan' => 'string'
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
        'jenis_tkd' => 'required|string|max:255',
        'dasar_penetapan' => 'nullable|string|max:255',
        'tgl_penetapan' => 'nullable',
        'simpulan_penetapan' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
