<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EvaluasiLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eva_laporan', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kode_pwk');
            $table->string('nama_pemda');
            $table->string('jenis_tkd');
            $table->string('nama_laporan');
            //asersi
            $table->string('keberadaan_laporan')->nullable();
            $table->string('nomor_laporan')->nullable();
            $table->date('tgl_laporan')->nullable();
            $table->date('tgl_penyampaian')->nullable();
            $table->text('penyebab_tidak_tepat_waktu')->nullable();
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
        Schema::dropIfExists('eva_laporan');
    }
}