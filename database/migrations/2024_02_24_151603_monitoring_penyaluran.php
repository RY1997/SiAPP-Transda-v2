<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MonitoringPenyaluran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon_penyaluran', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kode_pwk');
            $table->string('nama_pemda');
            $table->string('jenis_tkd');
            $table->string('alokasi_id');
            $table->string('tahap_salur');
            $table->decimal('penyaluran_tkd', 20, 2);
            $table->string('tepat_jumlah');
            $table->text('penyebab_tidak_tepat_jumlah')->nullable();
            $table->date('tgl_salur');
            $table->string('tepat_waktu');
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
        Schema::dropIfExists('mon_penyaluran');
    }
}
