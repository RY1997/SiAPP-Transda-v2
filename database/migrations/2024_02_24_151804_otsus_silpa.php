<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OtsusSilpa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otsus_silpa', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kode_pwk');
            $table->string('nama_pemda');
            $table->string('jenis_tkd');
            $table->decimal('nilai_silpa', 20, 2);
            //asersi
            $table->decimal('dianggarkan_relevan', 20, 2)->nullable();
            $table->decimal('dianggarkan_tidak_relevan', 20, 2)->nullable();
            $table->decimal('tidak_dianggarkan', 20, 2)->nullable();
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
        Schema::dropIfExists('otsus_silpa');
    }
}
