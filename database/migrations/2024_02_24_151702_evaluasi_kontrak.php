<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EvaluasiKontrak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eva_kontrak', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pwk');
            $table->string('nama_pemda');
            $table->string('tahun');
            $table->string('jenis_tkd');
            $table->string('nomor_kontrak');
            $table->date('tanggal_kontrak');
            $table->text('uraian_kontrak');
            $table->text('program');
            $table->text('kegiatan');
            $table->integer('target_output')->nullable();
            $table->string('satuan_output')->nullable();
            $table->string('jenis_kontrak')->nullable();
            $table->text('lokasi');
            $table->string('nama_opd')->nullable();
            $table->string('nama_rekanan')->nullable();
            $table->date('tgl_lelang')->nullable();
            $table->string('masa_kontrak');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->decimal('nilai_kontrak', 20, 2);
            $table->decimal('sisa_nilai_kontrak', 20, 2);
            $table->text('penyebab_pembayaran')->nullable();
            $table->string('no_bast')->nullable();
            $table->date('tgl_bast')->nullable();
            $table->string('realisasi_bast')->nullable();
            $table->decimal('persen_fisik', 3, 2)->nullable();
            $table->text('penyebab_realisasi')->nullable();
            $table->string('uji_petik');
            $table->text('keterangan')->nullable();
            //asersi
            $table->integer('target_omspan')->nullable();
            $table->integer('target_auditor')->nullable();
            $table->integer('realisasi_omspan')->nullable();
            $table->integer('realisasi_auditor')->nullable();
            $table->integer('fisik_omspan')->nullable();
            $table->integer('fisik_auditor')->nullable();
            $table->decimal('nilai_laporan', 20, 2)->nullable();
            $table->decimal('nilai_auditor', 20, 2)->nullable();
            $table->string('masalah_pelaksanaan')->nullable();
            $table->decimal('masalah1', 20, 2)->nullable();
            $table->text('uraian_masalah1')->nullable();
            $table->decimal('masalah2', 20, 2)->nullable();
            $table->text('uraian_masalah2')->nullable();
            $table->decimal('masalah3', 20, 2)->nullable();
            $table->text('uraian_masalah3')->nullable();
            $table->decimal('masalah4', 20, 2)->nullable();
            $table->text('uraian_masalah4')->nullable();
            $table->decimal('masalah5', 20, 2)->nullable();
            $table->text('uraian_masalah5')->nullable();
            $table->decimal('masalah6', 20, 2)->nullable();
            $table->text('uraian_masalah6')->nullable();
            $table->decimal('masalah7', 20, 2)->nullable();
            $table->text('uraian_masalah7')->nullable();
            $table->decimal('masalah8', 20, 2)->nullable();
            $table->text('uraian_masalah8')->nullable();
            $table->string('masalah_pemanfaatan')->nullable();
            $table->decimal('manfaat1', 20, 2)->nullable();
            $table->text('uraian_manfaat1')->nullable();
            $table->decimal('manfaat2', 20, 2)->nullable();
            $table->text('uraian_manfaat2')->nullable();
            $table->decimal('manfaat3', 20, 2)->nullable();
            $table->text('uraian_manfaat3')->nullable();
            $table->decimal('manfaat4', 20, 2)->nullable();
            $table->text('uraian_manfaat4')->nullable();
            $table->decimal('manfaat5', 20, 2)->nullable();
            $table->text('uraian_manfaat5')->nullable();
            $table->decimal('manfaat6', 20, 2)->nullable();
            $table->text('uraian_manfaat6')->nullable();
            $table->decimal('manfaat7', 20, 2)->nullable();
            $table->text('uraian_manfaat7')->nullable();
            $table->decimal('manfaat8', 20, 2)->nullable();
            $table->text('uraian_manfaat8')->nullable();
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
        Schema::dropIfExists('eva_kontrak');
    }
}
