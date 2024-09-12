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
        'belanja_modal_jalan',
        'belanja_pendidikan',
        'belanja_kesehatan',
        'pendapatan_daerah',
        'pendapatan_pad',
        'pendapatan_transfer',
        'pendapatan_lainnya',
        'penerimaan_pembiayaan',
        'pengeluaran_pembiayaan',
        'silpa',
        'rbelanja_daerah',
        'rbelanja_pegawai',
        'rbelanja_barjas',
        'rbelanja_modal',
        'rbelanja_hibah',
        'rbelanja_lainnya',
        'rbelanja_modal_jalan',
        'rbelanja_pendidikan',
        'rbelanja_kesehatan',
        'rpendapatan_daerah',
        'rpendapatan_pad',
        'rpendapatan_transfer',
        'rpendapatan_lainnya',
        'rpenerimaan_pembiayaan',
        'rpengeluaran_pembiayaan',
        'rsilpa',
        'kap_fiskal',
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
        'belanja_modal_jalan' => 'decimal:2',
        'belanja_pendidikan' => 'decimal:2',
        'belanja_kesehatan' => 'decimal:2',
        'pendapatan_daerah' => 'decimal:2',
        'pendapatan_pad' => 'decimal:2',
        'pendapatan_transfer' => 'decimal:2',
        'pendapatan_lainnya' => 'decimal:2',
        'penerimaan_pembiayaan' => 'decimal:2',
        'pengeluaran_pembiayaan' => 'decimal:2',
        'silpa' => 'decimal:2',
        'rbelanja_daerah' => 'decimal:2',
        'rbelanja_pegawai' => 'decimal:2',
        'rbelanja_barjas' => 'decimal:2',
        'rbelanja_modal' => 'decimal:2',
        'rbelanja_hibah' => 'decimal:2',
        'rbelanja_lainnya' => 'decimal:2',
        'rbelanja_modal_jalan' => 'decimal:2',
        'rbelanja_pendidikan' => 'decimal:2',
        'rbelanja_kesehatan' => 'decimal:2',
        'rpendapatan_daerah' => 'decimal:2',
        'rpendapatan_pad' => 'decimal:2',
        'rpendapatan_transfer' => 'decimal:2',
        'rpendapatan_lainnya' => 'decimal:2',
        'rpenerimaan_pembiayaan' => 'decimal:2',
        'rpengeluaran_pembiayaan' => 'decimal:2',
        'rsilpa' => 'decimal:2',
        'kap_fiskal' => 'string',
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
        'belanja_daerah' => 'nullable|numeric',
        'belanja_pegawai' => 'nullable|numeric',
        'belanja_barjas' => 'nullable|numeric',
        'belanja_modal' => 'nullable|numeric',
        'belanja_hibah' => 'nullable|numeric',
        'belanja_lainnya' => 'nullable|numeric',
        'belanja_modal_jalan' => 'nullable|numeric',
        'belanja_pendidikan' => 'nullable|numeric',
        'belanja_kesehatan' => 'nullable|numeric',
        'pendapatan_daerah' => 'nullable|numeric',
        'pendapatan_pad' => 'nullable|numeric',
        'pendapatan_transfer' => 'nullable|numeric',
        'pendapatan_lainnya' => 'nullable|numeric',
        'penerimaan_pembiayaan' => 'nullable|numeric',
        'pengeluaran_pembiayaan' => 'nullable|numeric',
        'silpa' => 'nullable|numeric',
        'rbelanja_daerah' => 'nullable|numeric',
        'rbelanja_pegawai' => 'nullable|numeric',
        'rbelanja_barjas' => 'nullable|numeric',
        'rbelanja_modal' => 'nullable|numeric',
        'rbelanja_hibah' => 'nullable|numeric',
        'rbelanja_lainnya' => 'nullable|numeric',
        'rbelanja_modal_jalan' => 'nullable|numeric',
        'rbelanja_pendidikan' => 'nullable|numeric',
        'rbelanja_kesehatan' => 'nullable|numeric',
        'rpendapatan_daerah' => 'nullable|numeric',
        'rpendapatan_pad' => 'nullable|numeric',
        'rpendapatan_transfer' => 'nullable|numeric',
        'rpendapatan_lainnya' => 'nullable|numeric',
        'rpenerimaan_pembiayaan' => 'nullable|numeric',
        'rpengeluaran_pembiayaan' => 'nullable|numeric',
        'rsilpa' => 'nullable|numeric',
        'kap_fiskal' => 'nullable|string|max:255',
        'silpa_tkd' => 'nullable|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
