<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MonitoringPenggunaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon_penggunaan', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kode_pwk');
            $table->string('nama_pemda');
            $table->string('jenis_tkd');
            $table->string('bidang_tkd');
            $table->decimal('anggaran_tkd', 20, 2);
            $table->decimal('realisasi_tkd', 20, 2);
            $table->text('penyebab_kurang_serap')->nullable();
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
        Schema::dropIfExists('mon_penggunaan');
    }
}
