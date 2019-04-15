<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedienteRegimensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente_regimens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_expediente')->unsigned();
            $table->foreign('cod_expediente')->references('id')->on('expedientes')->onDelete('set null');
            $table->integer('cod_asignatura')->unsigned();
            $table->foreign('cod_asignatura')->references('id')->on('asignaturas')->onDelete('set null');     
            $table->date('fecha_fin');
            $table->enum('tipo', ['condicional','definitivo']); //Revisar
            $table->enum('estado', ['en curso','finalizado']);
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
        Schema::dropIfExists('expediente_regimens');
    }
}
