<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MonitoringTl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon_tl', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kode_pwk');
            $table->string('nama_pemda');
            $table->string('jenis_tkd');
            $table->string('kelompok_permasalahan');
            $table->text('uraian_permasalahan');
            $table->decimal('nilai_permasalahan', 20, 2);
            $table->text('uraian_rekomendasi');
            $table->text('uraian_tl');
            $table->decimal('nilai_tl', 20, 2);
            $table->string('simpulan_tl');
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
        Schema::dropIfExists('mon_tl');
    }
}
