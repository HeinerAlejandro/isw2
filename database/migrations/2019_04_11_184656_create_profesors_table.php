<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_persona')->unsigned()->unique();
            $table->integer('cod_area')->unsigned();
            $table->integer('cod_sede')->unsigned();
            $table->foreign('cod_sede')->references('id')->on('sedes')->onDelete('set null');    
            $table->string('cargo');
            $table->enum('estado', ['activo', 'inactivo','jubilado','discapacitado','reposo']);
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
        Schema::dropIfExists('profesors');
    }
}
