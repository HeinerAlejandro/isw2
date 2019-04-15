<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_materias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_materia')->unsigned();
            $table->foreign('cod_materia')->references('id')->on('materia_ofertadas')->onDelete('set null');
            $table->string('sede');
            $table->enum('dia', ['lunes','martes','miercoles','jueves','viernes']);
            $table->time('horario_inicio');
            $table->time('horario_fin');
            $table->string('aula');
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
        Schema::dropIfExists('horario_materias');
    }
}
