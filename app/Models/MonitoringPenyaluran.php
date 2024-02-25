<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MonitoringPenyaluran
 * @package App\Models
 * @version February 25, 2024, 7:34 pm UTC
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $alokasi_id
 * @property string $tahap_salur
 * @property number $penyaluran_tkd
 * @property string $tepat_jumlah
 * @property string $penyebab_tidak_tepat_jumlah
 * @property string $tgl_salur
 * @property string $tepat_waktu
 * @property string $penyebab_tidak_tepat_waktu
 */
class MonitoringPenyaluran extends Model
{

    use HasFactory;

    public $table = 'mon_penyaluran';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'alokasi_id',
        'tahap_salur',
        'penyaluran_tkd',
        'tepat_jumlah',
        'penyebab_tidak_tepat_jumlah',
        'tgl_salur',
        'tepat_waktu',
        'penyebab_tidak_tepat_waktu'
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
        'alokasi_id' => 'string',
        'tahap_salur' => 'string',
        'penyaluran_tkd' => 'decimal:2',
        'tepat_jumlah' => 'string',
        'penyebab_tidak_tepat_jumlah' => 'string',
        'tgl_salur' => 'date',
        'tepat_waktu' => 'string',
        'penyebab_tidak_tepat_waktu' => 'string'
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
        'alokasi_id' => 'required|string|max:255',
        'tahap_salur' => 'required|string|max:255',
        'penyaluran_tkd' => 'required|numeric',
        'tepat_jumlah' => 'required|string|max:255',
        'penyebab_tidak_tepat_jumlah' => 'nullable|string',
        'tgl_salur' => 'required',
        'tepat_waktu' => 'required|string|max:255',
        'penyebab_tidak_tepat_waktu' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
