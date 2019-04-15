<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_inscripcions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_inscripcion')->unsigned()->unique();
            $table->foreign('cod_inscripcion')->references('id')->on('inscripcions')->onDelete('set null');
            $table->integer('calificacion')->unsigned();
            $table->enum('estado', ['aprobada','reprobada']);
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
        Schema::dropIfExists('acta_inscripcions');
    }
}
