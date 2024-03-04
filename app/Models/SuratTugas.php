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
        'no_st' => 'required|string|max:255',
        'tgl_st' => 'required',
        'nama_penugasan' => 'required|string|max:255',
        'jenis_penugasan' => 'required|string|max:255',
        'nama_pemda' => 'required|string|max:255',
        'tgl_mulai' => 'required',
        'tgl_akhir' => 'required',
        'status_st' => 'required|string|max:255',
        'file_st' => 'required|string|max:255',
        'tw_penugasan' => 'required|string|max:255',
        'tahun_penugasan' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
