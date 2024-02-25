<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuratTugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_tugas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pwk');
            $table->string('no_st');
            $table->date('tgl_st');
            $table->string('nama_penugasan');
            $table->string('jenis_penugasan');
            $table->string('nama_pemda');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->string('status_st');
            $table->string('file_st');
            $table->string('tw_penugasan');
            $table->string('tahun_penugasan');
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
        Schema::dropIfExists('surat_tugas');
    }
}
