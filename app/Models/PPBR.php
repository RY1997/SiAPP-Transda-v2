<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPBR extends Model
{
    use HasFactory;

    public $table = 'pm_ppbr';

    public $fillable = [
        'kode_pwk',
        'jenis_tkd',
        'nama_pemda',
        'nama_provinsi',
        'alokasi',
        'rank_risiko_1',
        'capaian_ipm',
        'rank_risiko_2',
        'rank_risiko_total',
        'ket_pwk',
        'uji_petik'
    ];
}
