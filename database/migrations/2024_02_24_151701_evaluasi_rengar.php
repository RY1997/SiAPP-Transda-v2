<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EvaluasiRengar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eva_rengar', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kode_pwk');
            $table->string('nama_pemda');
            $table->string('kode_program');
            $table->string('nama_program');
            $table->string('kode_kegiatan');
            $table->string('nama_kegiatan');
            $table->string('kode_subkegiatan');
            $table->string('nama_subkegiatan');
            $table->string('sumber_dana');
            $table->string('kode_akun_utama');
            $table->string('nama_akun_utama');
            $table->string('kode_akun_kelompok');
            $table->string('nama_akun_kelompok');
            $table->string('kode_akun_jenis');
            $table->string('nama_akun_jenis');
            $table->string('kode_akun_objek');
            $table->string('nama_akun_objek');
            $table->string('kode_akun_subrinci');
            $table->string('nama_akun_subrinci');
            $table->decimal('nilai_anggaran', 20, 2);
            //asersi
            $table->string('urusan_subkegiatan');
            $table->decimal('nilai_realisasi', 20, 2);
            $table->string('relevansi_subkegiatan');
            $table->string('pelaksanaan_subkegiatan');
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
        Schema::dropIfExists('eva_rengar');
    }
}