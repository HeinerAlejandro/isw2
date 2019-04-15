<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_persona')->unsigned()->unique();
            $table->foreign('cod_persona')->references('id')->on('personas')->onDelete('set null');
            $table->float('saldo');
            $table->enum('estado', ['activo', 'inactivo','en regimen','inscrito','no inscrito','egresado']);
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
        Schema::dropIfExists('estudiantes');
    }
}
