<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EvaluasiLaporan
 * @package App\Models
 * @version February 25, 2024, 7:38 pm UTC
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $nama_laporan
 * @property string $keberadaan_laporan
 * @property string $nomor_laporan
 * @property string $tgl_laporan
 * @property string $tgl_penyampaian
 * @property string $penyebab_tidak_tepat_waktu
 */
class EvaluasiLaporan extends Model
{

    use HasFactory;

    public $table = 'eva_laporan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'nama_laporan',
        'keberadaan_laporan',
        'nomor_laporan',
        'tgl_laporan',
        'tgl_penyampaian',
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
        'nama_laporan' => 'string',
        'keberadaan_laporan' => 'string',
        'nomor_laporan' => 'string',
        'tgl_laporan' => 'date',
        'tgl_penyampaian' => 'date',
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
        'nama_laporan' => 'required|string|max:255',
        'keberadaan_laporan' => 'nullable|string|max:255',
        'nomor_laporan' => 'nullable|string|max:255',
        'tgl_laporan' => 'nullable',
        'tgl_penyampaian' => 'nullable',
        'penyebab_tidak_tepat_waktu' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
