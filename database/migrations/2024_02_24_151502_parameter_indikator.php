<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParameterIndikator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pm_indikator', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_tkd');
            $table->string('bidang_tkd');
            $table->string('uraian_indikator');
            $table->string('satuan_indikator');
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
        Schema::dropIfExists('pm_indikator');
    }
}
