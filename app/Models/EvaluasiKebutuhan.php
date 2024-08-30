<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EvaluasiKebutuhan
 * @package App\Models
 * @version August 29, 2024, 11:17 pm WIB
 *
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $tahun
 * @property string $jenis_tkd
 * @property string $program
 * @property string $kegiatan
 * @property string $indikator_kegiatan
 * @property string $satuan
 * @property number $nilai_target
 * @property number $unit_target
 * @property number $nilai_pad
 * @property number $unit_pad
 * @property number $nilai_dau
 * @property number $unit_dau
 * @property number $nilai_dbh
 * @property number $unit_dbh
 * @property number $nilai_dak
 * @property number $unit_dak
 */
class EvaluasiKebutuhan extends Model
{

    use HasFactory;

    public $table = 'eva_kebutuhan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'kode_pwk',
        'nama_pemda',
        'tahun',
        'jenis_tkd',
        'bidang',
        'program',
        'kegiatan',
        'indikator_kegiatan',
        'satuan',
        'nilai_target',
        'unit_target',
        'nilai_pad',
        'unit_pad',
        'nilai_dau',
        'unit_dau',
        'nilai_dbh',
        'unit_dbh',
        'nilai_dak',
        'unit_dak',
        'nilai_otsus',
        'unit_otsus',
        'unit_selesai',
        'unit_tidak_selesai',
        'unit_tidak_dilaksanakan',
        'unit_tahun_selanjutnya',
        'simpulan_ketuntasan',
        'penyebab_tidak_tuntas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode_pwk' => 'string',
        'nama_pemda' => 'string',
        'tahun' => 'string',
        'jenis_tkd' => 'string',
        'bidang' => 'string',
        'program' => 'string',
        'kegiatan' => 'string',
        'indikator_kegiatan' => 'string',
        'satuan' => 'string',
        'nilai_target' => 'decimal:2',
        'unit_target' => 'integer',
        'nilai_pad' => 'decimal:2',
        'unit_pad' => 'integer',
        'nilai_dau' => 'decimal:2',
        'unit_dau' => 'integer',
        'nilai_dbh' => 'decimal:2',
        'unit_dbh' => 'integer',
        'nilai_dak' => 'decimal:2',
        'unit_dak' => 'integer',
        'nilai_otsus' => 'decimal:2',
        'unit_otsus' => 'integer',
        'unit_selesai' => 'integer',
        'unit_tidak_selesai' => 'integer',
        'unit_tidak_dilaksanakan' => 'integer',
        'unit_tahun_selanjutnya' => 'integer',
        'simpulan_ketuntasan' => 'string',
        'penyebab_tidak_tuntas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode_pwk' => 'nullable|string|max:255',
        'nama_pemda' => 'required|string|max:255',
        'tahun' => 'required|string|max:255',
        'jenis_tkd' => 'nullable|string|max:255',
        'bidang' => 'required|string',
        'program' => 'required|string',
        'kegiatan' => 'required|string',
        'indikator_kegiatan' => 'nullable|string',
        'satuan' => 'nullable|string|max:255',
        'nilai_target' => 'nullable|numeric',
        'unit_target' => 'nullable|numeric',
        'nilai_pad' => 'nullable|numeric',
        'unit_pad' => 'nullable|numeric',
        'nilai_dau' => 'nullable|numeric',
        'unit_dau' => 'nullable|numeric',
        'nilai_dbh' => 'nullable|numeric',
        'unit_dbh' => 'nullable|numeric',
        'nilai_dak' => 'nullable|numeric',
        'unit_dak' => 'nullable|numeric',
        'nilai_otsus' => 'nullable|numeric',
        'unit_otsus' => 'nullable|numeric',
        'unit_selesai' => 'nullable|numeric',
        'unit_tidak_selesai' => 'nullable|numeric',
        'unit_tidak_dilaksanakan' => 'nullable|numeric',
        'unit_tahun_selanjutnya' => 'nullable|numeric',
        'simpulan_ketuntasan' => 'nullable|string',
        'penyebab_tidak_tuntas' => 'nullable|string',
        'updated_at' => 'nullable',
        'created_at' => 'nullable'
    ];

    public function st()
    {
        return $this->belongsTo(\App\Models\SuratTugas::class, 'nama_pemda', 'nama_pemda');
    }

    
}
