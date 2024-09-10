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
        'tipe_tkd',
        'bidang_tkd',
        'subbidang_tkd',
        'uraian',
        'tahap_salur',
        'saldo_rkud',
        'saldo_pokok',
        'remunerasi',
        'penarikan_seluruhnya',
        'penyaluran_tkd',
        'potong_salur',
        'tunda_salur',
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
        'tipe_tkd' => 'string',
        'bidang_tkd' => 'string',
        'subbidang_tkd' => 'string',
        'uraian' => 'string',
        'tahap_salur' => 'string',
        'saldo_rkud' => 'decimal:2',
        'saldo_pokok' => 'decimal:2',
        'remunerasi' => 'decimal:2',
        'penarikan_seluruhnya' => 'decimal:2',
        'penyaluran_tkd' => 'decimal:2',
        'potong_salur' => 'decimal:2',
        'tunda_salur' => 'decimal:2',
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
        'tahun' => 'nullable|string|max:255',
        'kode_pwk' => 'nullable|string|max:255',
        'nama_pemda' => 'nullable|string|max:255',
        'jenis_tkd' => 'nullable|string|max:255',
        'tipe_tkd' => 'nullable|string|max:255',
        'bidang_tkd' => 'nullable|string|max:255',
        'subbidang_tkd' => 'nullable|string|max:255',
        'uraian' => 'nullable|string|max:255',
        'tahap_salur' => 'nullable|string|max:255',
        'penyaluran_tkd' => 'nullable|numeric',
        'potong_salur' => 'nullable|numeric',
        'tunda_salur' => 'nullable|numeric',
        'tepat_jumlah' => 'nullable|string|max:255',
        'penyebab_tidak_tepat_jumlah' => 'nullable|string',
        'tgl_salur' => 'nullable',
        'tepat_waktu' => 'nullable|string|max:255',
        'penyebab_tidak_tepat_waktu' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
