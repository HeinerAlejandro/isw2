<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_usuario')->unsigned()->nullable()->unique();
            $table->foreign('cod_usuario')->references('id')->on('users')->onDelete('set null');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula')->unique();
            $table->string('telefono')->nullable();
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->enum('sexo', ['masculino', 'femenino']);
            $table->enum('tipo', ['estudiante', 'profesor']);
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
        Schema::dropIfExists('personas');
    }
}
