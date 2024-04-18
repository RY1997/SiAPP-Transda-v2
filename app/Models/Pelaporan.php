<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pelaporan
 * @package App\Models
 * @version February 25, 2024, 7:42 pm UTC
 *
 * @property string $kode_pwk
 * @property string $id_st
 * @property string $no_laporan
 * @property string $tgl_laporan
 * @property string $nama_pemda
 * @property string $status_laporan
 * @property string $file_laporan
 */
class Pelaporan extends Model
{

    use HasFactory;

    public $table = 'pelaporan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'kode_pwk',
        'id_st',
        'no_laporan',
        'tgl_laporan',
        'nama_pemda',
        'status_laporan',
        'file_laporan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode_pwk' => 'string',
        'id_st' => 'string',
        'no_laporan' => 'string',
        'tgl_laporan' => 'date',
        'nama_pemda' => 'string',
        'status_laporan' => 'string',
        'file_laporan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_laporan' => 'required|string|max:255',
        'tgl_laporan' => 'required',
        'status_laporan' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function st()
    {
        return $this->hasOne(\App\Models\SuratTugas::class, 'id', 'id_st');
    }
    
}
