<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFechaInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fecha_inscripcions', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->integer('cod_expediente')->unsigned();
            $table->foreign('cod_expediente')->references('id')->on('expedientes')->onDelete('set null');
            $table->integer('cod_lapso')->unsigned();
            $table->foreign('cod_lapso')->references('id')->on('lapso_academicos')->onDelete('set null');     
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_fin');
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
        Schema::dropIfExists('fecha_inscripcions');
    }
}
