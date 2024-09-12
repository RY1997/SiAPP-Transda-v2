<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MonitoringHibah
 * @package App\Models
 * @version September 9, 2024, 9:41 pm WIB
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $uraian_hibah
 * @property number $alokasi_hibah
 * @property number $penyaluran_hibah
 * @property number $penggunaan_hibah
 */
class MonitoringHibah extends Model
{

    use HasFactory;

    public $table = 'mon_hibah';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'uraian_hibah',
        'alokasi_hibah',
        'penyaluran_hibah',
        'penggunaan_hibah'
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
        'uraian_hibah' => 'string',
        'alokasi_hibah' => 'decimal:2',
        'penyaluran_hibah' => 'decimal:2',
        'penggunaan_hibah' => 'decimal:2'
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
        'uraian_hibah' => 'nullable|string|max:255',
        'alokasi_hibah' => 'nullable|numeric',
        'penyaluran_hibah' => 'nullable|numeric',
        'penggunaan_hibah' => 'nullable|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
