<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLapsoAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapso_academicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');  
            $table->float('costo')->nullable();
            $table->enum('estado', ['nuevo', 'en curso','finalizado']);
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
        Schema::dropIfExists('lapso_academicos');
    }
}
