<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrelacionAsignaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prelacion_asignaturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_detalle')->unsigned();
            $table->foreign('cod_detalle')->references('id')->on('detalle_pensums')->onDelete('set null');
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
        Schema::dropIfExists('prelacion_asignaturas');
    }
}
