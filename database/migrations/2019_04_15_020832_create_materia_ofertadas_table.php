<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaOfertadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_ofertadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('num_seccion')->unsigned();
            $table->integer('cod_asignatura')->unsigned();
            $table->foreign('cod_asignatura')->references('id')->on('asignaturas')->onDelete('set null');
            $table->integer('cod_profesor')->unsigned();
            $table->foreign('cod_profesor')->references('id')->on('profesors')->onDelete('set null');
            $table->integer('cod_lapso')->unsigned();
            $table->foreign('cod_lapso')->references('id')->on('lapso_academicos')->onDelete('set null');
            $table->integer('cupo_maximo')->unsigned();
            $table->integer('cupo_disponible')->unsigned();
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
        Schema::dropIfExists('materia_ofertadas');
    }
}
