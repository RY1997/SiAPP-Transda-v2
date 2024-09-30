<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPemda extends Model
{
    use HasFactory;

    public $table = 'pm_pemda';

    public $fillable = [
        'antrian',
    ];

    public function dataUmumTkd()
    {
        return $this->hasMany(\App\Models\DataUmumTkd::class, 'nama_pemda', 'nama_pemda');
    }

    public function monitoringApbd()
    {
        return $this->hasMany(\App\Models\MonitoringApbd::class, 'nama_pemda', 'nama_pemda');
    }

    public function monitoringAlokasi()
    {
        return $this->hasMany(\App\Models\MonitoringAlokasi::class, 'nama_pemda', 'nama_pemda');
    }

    public function monitoringPenyaluran()
    {
        return $this->hasMany(\App\Models\MonitoringPenyaluran::class, 'nama_pemda', 'nama_pemda');
    }

    public function monitoringPenggunaan()
    {
        return $this->hasMany(\App\Models\MonitoringPenggunaan::class, 'nama_pemda', 'nama_pemda');
    }

    public function monitoringSisaTkd()
    {
        return $this->hasMany(\App\Models\MonitoringSisaTkd::class, 'nama_pemda', 'nama_pemda');
    }

    public function monitoringImmediateOutcome()
    {
        return $this->hasMany(\App\Models\MonitoringImmediateOutcome::class, 'nama_pemda', 'nama_pemda');
    }

    public function monitoringHibah()
    {
        return $this->hasMany(\App\Models\MonitoringHibah::class, 'nama_pemda', 'nama_pemda');
    }

    public function monitoringIndikatorMakro()
    {
        return $this->hasMany(\App\Models\MonitoringIndikatorMakro::class, 'nama_pemda', 'nama_pemda');
    }
}
