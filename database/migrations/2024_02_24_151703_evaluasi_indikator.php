<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EvaluasiIndikator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eva_indikator', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kode_pwk');
            $table->string('nama_pemda');
            $table->string('uraian_indikator')->nullable();
            $table->integer('target')->nullable();
            $table->integer('realisasi')->nullable();
            $table->date('cutoff_capaian')->nullable();
            $table->string('sumber_data');
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('eva_indikator');
    }
}