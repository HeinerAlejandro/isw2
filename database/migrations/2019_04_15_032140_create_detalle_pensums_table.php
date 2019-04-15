<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePensumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pensums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('semestre')->unsigned();
            $table->integer('nivel')->unsigned();
            $table->integer('cod_plan')->unsigned();
            $table->foreign('cod_plan')->references('id')->on('plan_estudios')->onDelete('set null');
            $table->integer('cod_asignatura')->unsigned();
            $table->foreign('cod_asignatura')->references('id')->on('asignaturas')->onDelete('set null');
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
        Schema::dropIfExists('detalle_pensums');
    }
}
