<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OtsusRipp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otsus_ripp', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kode_pwk');
            $table->string('nama_pemda');
            $table->string('jenis_tkd');
            $table->text('item_ripp');
            //asersi
            $table->text('uraian_ripp')->nullable();
            $table->text('penyebab_ripp')->nullable();
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
        Schema::dropIfExists('otsus_ripp');
    }
}