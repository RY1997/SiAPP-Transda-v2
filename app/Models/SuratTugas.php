<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SuratTugas
 * @package App\Models
 * @version February 25, 2024, 7:41 pm UTC
 *
 * @property string $kode_pwk
 * @property string $no_st
 * @property string $tgl_st
 * @property string $nama_penugasan
 * @property string $jenis_penugasan
 * @property string $nama_pemda
 * @property string $tgl_mulai
 * @property string $tgl_akhir
 * @property string $status_st
 * @property string $file_st
 * @property string $tw_penugasan
 * @property string $tahun_penugasan
 */
class SuratTugas extends Model
{

    use HasFactory;

    public $table = 'surat_tugas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'kode_pwk',
        'no_st',
        'tgl_st',
        'jenis_tkd',
        'nama_penugasan',
        'jenis_penugasan',
        'nama_pemda',
        'tgl_mulai',
        'tgl_akhir',
        'status_st',
        'file_st',
        'tw_penugasan',
        'tahun_penugasan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode_pwk' => 'string',
        'no_st' => 'string',
        'tgl_st' => 'date',
        'nama_penugasan' => 'string',
        'jenis_penugasan' => 'string',
        'nama_pemda' => 'string',
        'tgl_mulai' => 'date',
        'tgl_akhir' => 'date',
        'status_st' => 'string',
        'file_st' => 'string',
        'tw_penugasan' => 'string',
        'tahun_penugasan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode_pwk' => 'nullable|string|max:255',
        'no_st' => 'nullable|string|max:255',
        'tgl_st' => 'nullable',
        'nama_penugasan' => 'nullable|string|max:255',
        'jenis_penugasan' => 'nullable|string|max:255',
        'nama_pemda' => 'nullable|string|max:255',
        'tgl_mulai' => 'nullable',
        'tgl_akhir' => 'nullable',
        'status_st' => 'nullable|string|max:255',
        'file_st' => 'nullable|string|max:255',
        'tw_penugasan' => 'nullable|string|max:255',
        'tahun_penugasan' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function pwk()
    {
        return $this->hasOne(\App\Models\User::class, 'kode_pwk', 'kode_pwk');
    }

    public function laporan()
    {
        return $this->hasOne(\App\Models\Pelaporan::class, 'id_st', 'id');
    }
    
    public function apbd()
    {
        return $this->hasMany(\App\Models\MonitoringApbd::class, 'nama_pemda', 'nama_pemda');
    }

    public function alokasi()
    {
        return $this->hasMany(\App\Models\MonitoringAlokasi::class, 'nama_pemda', 'nama_pemda');
    }

    public function penyaluran()
    {
        return $this->hasMany(\App\Models\MonitoringPenyaluran::class, 'nama_pemda', 'nama_pemda');
    }

    public function penggunaan()
    {
        return $this->hasMany(\App\Models\MonitoringPenggunaan::class, 'nama_pemda', 'nama_pemda');
    }

    public function penetapan()
    {
        return $this->hasMany(\App\Models\KebijakanOtsus::class, 'nama_pemda', 'nama_pemda');
    }

    public function jakda()
    {
        return $this->hasMany(\App\Models\MonitoringTl::class, 'nama_pemda', 'nama_pemda');
    }

    public function rengar()
    {
        return $this->hasMany(\App\Models\EvaluasiRengar::class, 'nama_pemda', 'nama_pemda');
    }

    public function ripp()
    {
        return $this->hasMany(\App\Models\RippOtsus::class, 'nama_pemda', 'nama_pemda');
    }
    
    public function kontrak()
    {
        return $this->hasMany(\App\Models\EvaluasiKontrak::class, 'nama_pemda', 'nama_pemda');
    }

    public function nonfisik()
    {
        return $this->hasMany(\App\Models\EvaluasiNonfisik::class, 'nama_pemda', 'nama_pemda');
    }

    public function silpa()
    {
        return $this->hasMany(\App\Models\SilpaOtsus::class, 'nama_pemda', 'nama_pemda');
    }

    public function efektivitas()
    {
        return $this->hasMany(\App\Models\EvaluasiIndikator::class, 'nama_pemda', 'nama_pemda');
    }

    public function pelaporan()
    {
        return $this->hasMany(\App\Models\EvaluasiLaporan::class, 'nama_pemda', 'nama_pemda');
    }

    public function prioritas()
    {
        return $this->hasMany(\App\Models\EvaluasiPrioritas::class, 'nama_pemda', 'nama_pemda');
    }
}
