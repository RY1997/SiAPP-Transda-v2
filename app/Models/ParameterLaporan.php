<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ParameterLaporan
 * @package App\Models
 * @version February 25, 2024, 7:28 pm UTC
 *
 * @property string $jenis_tkd
 * @property string $bidang_tkd
 * @property string $nama_laporan
 * @property string $batas_penyampaian
 */
class ParameterLaporan extends Model
{

    use HasFactory;

    public $table = 'pm_laporan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'jenis_tkd',
        'bidang_tkd',
        'tahun_laporan',
        'nama_laporan',
        'batas_penyampaian'
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
        'tahun_laporan' => 'string',
        'nama_laporan' => 'string',
        'batas_penyampaian' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jenis_tkd' => 'required|string|max:255',
        'bidang_tkd' => 'required|string|max:255',
        'tahun_laporan' => 'required|string|max:255',
        'nama_laporan' => 'required|string|max:255',
        'batas_penyampaian' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
