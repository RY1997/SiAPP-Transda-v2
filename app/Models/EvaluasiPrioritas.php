<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EvaluasiPrioritas
 * @package App\Models
 * @version September 8, 2024, 10:30 pm WIB
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property string $bidang_tkd
 * @property string $subbidang_tkd
 * @property number $anggaran_tkd
 * @property string $nama_skpd
 * @property string $nama_program
 * @property string $nama_kegiatan
 * @property number $nilai_anggaran
 * @property number $nilai_realisasi
 * @property string $prioritas_kegiatan
 * @property string $prioritas_penggunaan
 * @property string $pemanfaatan_kegiatan
 */
class EvaluasiPrioritas extends Model
{

    use HasFactory;

    public $table = 'eva_prioritas_pemanfaatan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'bidang_tkd',
        'subbidang_tkd',
        'anggaran_tkd',
        'nama_skpd',
        'nama_program',
        'nama_kegiatan',
        'nilai_anggaran',
        'nilai_realisasi',
        'prioritas_kegiatan',
        'prioritas_penggunaan',
        'pemanfaatan_kegiatan'
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
        'subbidang_tkd' => 'string',
        'anggaran_tkd' => 'decimal:2',
        'nama_skpd' => 'string',
        'nama_program' => 'string',
        'nama_kegiatan' => 'string',
        'nilai_anggaran' => 'decimal:2',
        'nilai_realisasi' => 'decimal:2',
        'prioritas_kegiatan' => 'string',
        'prioritas_penggunaan' => 'string',
        'pemanfaatan_kegiatan' => 'string'
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
        'subbidang_tkd' => 'nullable|string|max:255',
        'anggaran_tkd' => 'nullable|numeric',
        'nama_skpd' => 'nullable|string',
        'nama_program' => 'nullable|string',
        'nama_kegiatan' => 'nullable|string',
        'nilai_anggaran' => 'nullable|numeric',
        'nilai_realisasi' => 'nullable|numeric',
        'prioritas_kegiatan' => 'nullable|string|max:255',
        'prioritas_penggunaan' => 'nullable|string|max:255',
        'pemanfaatan_kegiatan' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
