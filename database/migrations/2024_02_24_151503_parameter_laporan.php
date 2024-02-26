<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParameterLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pm_laporan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_tkd');
            $table->string('bidang_tkd');
            $table->string('tahun_laporan');
            $table->string('nama_laporan');
            $table->string('batas_penyampaian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pm_laporan');
    }
}
