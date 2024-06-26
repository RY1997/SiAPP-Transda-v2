<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MonitoringApbd
 * @package App\Models
 * @version February 25, 2024, 7:33 pm UTC
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property number $belanja_daerah
 * @property number $belanja_pegawai
 * @property number $belanja_barjas
 * @property number $belanja_modal
 * @property number $belanja_hibah
 * @property number $belanja_lainnya
 * @property number $pendapatan_daerah
 * @property number $pendapatan_pad
 * @property number $pendapatan_transfer
 * @property number $pendapatan_lainnya
 * @property number $penerimaan_pembiayaan
 * @property number $pengeluaran_pembiayaan
 * @property number $silpa
 * @property number $silpa_tkd
 */
class MonitoringApbd extends Model
{

    use HasFactory;

    public $table = 'mon_apbd';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'belanja_daerah',
        'belanja_pegawai',
        'belanja_barjas',
        'belanja_modal',
        'belanja_hibah',
        'belanja_lainnya',
        'pendapatan_daerah',
        'pendapatan_pad',
        'pendapatan_transfer',
        'pendapatan_lainnya',
        'penerimaan_pembiayaan',
        'pengeluaran_pembiayaan',
        'silpa',
        'silpa_tkd'
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
        'belanja_daerah' => 'decimal:2',
        'belanja_pegawai' => 'decimal:2',
        'belanja_barjas' => 'decimal:2',
        'belanja_modal' => 'decimal:2',
        'belanja_hibah' => 'decimal:2',
        'belanja_lainnya' => 'decimal:2',
        'pendapatan_daerah' => 'decimal:2',
        'pendapatan_pad' => 'decimal:2',
        'pendapatan_transfer' => 'decimal:2',
        'pendapatan_lainnya' => 'decimal:2',
        'penerimaan_pembiayaan' => 'decimal:2',
        'pengeluaran_pembiayaan' => 'decimal:2',
        'silpa' => 'decimal:2',
        'silpa_tkd' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tahun' => 'nullable|string|max:255',
        'kode_pwk' => 'nullable|string|max:255',
        'nama_pemda' => 'required|string|max:255',
        'belanja_daerah' => 'required|numeric',
        'belanja_pegawai' => 'required|numeric',
        'belanja_barjas' => 'required|numeric',
        'belanja_modal' => 'required|numeric',
        'belanja_hibah' => 'required|numeric',
        'belanja_lainnya' => 'required|numeric',
        'pendapatan_daerah' => 'required|numeric',
        'pendapatan_pad' => 'required|numeric',
        'pendapatan_transfer' => 'required|numeric',
        'pendapatan_lainnya' => 'required|numeric',
        'penerimaan_pembiayaan' => 'required|numeric',
        'pengeluaran_pembiayaan' => 'required|numeric',
        'silpa' => 'required|numeric',
        'silpa_tkd' => 'nullable|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
