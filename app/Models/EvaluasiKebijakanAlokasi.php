<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EvaluasiKebijakanAlokasi
 * @package App\Models
 * @version September 9, 2024, 2:00 am WIB
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $bidang_tkd
 * @property string $dasar_penetapan
 * @property string $perhitungan_realisasi
 * @property string $rekon_triwulanan
 * @property string $keterlibatan_penghasil
 * @property string $keberadaan_kebijakan
 * @property string $nomor_kebijakan
 * @property string $tgl_kebijakan
 * @property string $uraian_kebijakan
 * @property string $kesesuaian_pusat
 * @property string $alokasi_opd
 */
class EvaluasiKebijakanAlokasi extends Model
{

    use HasFactory;

    public $table = 'dbh_kebijakan_alokasi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'bidang_tkd',
        'dasar_penetapan',
        'perhitungan_realisasi',
        'rekon_triwulanan',
        'keterlibatan_penghasil',
        'keberadaan_kebijakan',
        'nomor_kebijakan',
        'tgl_kebijakan',
        'uraian_kebijakan',
        'kesesuaian_pusat',
        'alokasi_opd'
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
        'bidang_tkd' => 'string',
        'dasar_penetapan' => 'string',
        'perhitungan_realisasi' => 'string',
        'rekon_triwulanan' => 'string',
        'keterlibatan_penghasil' => 'string',
        'keberadaan_kebijakan' => 'string',
        'nomor_kebijakan' => 'string',
        'tgl_kebijakan' => 'date',
        'uraian_kebijakan' => 'string',
        'kesesuaian_pusat' => 'string',
        'alokasi_opd' => 'string'
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
        'jenis_tkd' => 'nullable|string|max:255',
        'bidang_tkd' => 'nullable|string|max:255',
        'dasar_penetapan' => 'nullable|string|max:255',
        'perhitungan_realisasi' => 'nullable|string|max:255',
        'rekon_triwulanan' => 'nullable|string|max:255',
        'keterlibatan_penghasil' => 'nullable|string|max:255',
        'keberadaan_kebijakan' => 'nullable|string|max:255',
        'nomor_kebijakan' => 'nullable|string|max:255',
        'tgl_kebijakan' => 'nullable',
        'uraian_kebijakan' => 'nullable|string',
        'kesesuaian_pusat' => 'nullable|string|max:255',
        'alokasi_opd' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
