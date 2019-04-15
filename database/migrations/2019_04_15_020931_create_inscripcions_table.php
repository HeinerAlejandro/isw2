<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('cod_materia')->unsigned();
            $table->foreign('cod_materia')->references('id')->on('materia_ofertadas')->onDelete('set null');
            $table->integer('cod_expediente')->unsigned();
            $table->foreign('cod_expediente')->references('id')->on('expedientes')->onDelete('set null');
            $table->enum('estado', ['normal','adicionada','retirada']);
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
        Schema::dropIfExists('inscripcions');
    }
}
