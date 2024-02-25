<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MonitoringApbd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon_apbd', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kode_pwk');
            $table->string('nama_pemda');
            $table->decimal('belanja_daerah', 20, 2);
            $table->decimal('belanja_pegawai', 20, 2);
            $table->decimal('belanja_barjas', 20, 2);
            $table->decimal('belanja_modal', 20, 2);
            $table->decimal('belanja_hibah', 20, 2);
            $table->decimal('belanja_lainnya', 20, 2);
            $table->decimal('pendapatan_daerah', 20, 2);
            $table->decimal('pendapatan_pad', 20, 2);
            $table->decimal('pendapatan_transfer', 20, 2);
            $table->decimal('pendapatan_lainnya', 20, 2);
            $table->decimal('penerimaan_pembiayaan', 20, 2);
            $table->decimal('pengeluaran_pembiayaan', 20, 2);
            $table->decimal('silpa', 20, 2);
            $table->decimal('silpa_tkd', 20, 2);
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
        Schema::dropIfExists('mon_apbd');
    }
}
