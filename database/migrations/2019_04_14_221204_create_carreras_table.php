<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->integer('cod_programa')->unsigned();
            $table->foreign('cod_programa')->references('id')->on('programas')->onDelete('set null');   
            $table->integer('cod_departamento')->unsigned();
            $table->foreign('cod_departamento')->references('id')->on('departamentos')->onDelete('set null');
            $table->integer('cod_coordinador')->unsigned()->nullable()->unique();
            $table->foreign('cod_coordinador')->references('id')->on('profesors')->onDelete('set null');
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
        Schema::dropIfExists('carreras');
    }
}
