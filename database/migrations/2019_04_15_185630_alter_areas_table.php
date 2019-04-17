<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->foreign('cod_coordinador')->references('id')->on('profesors')->onDelete('set null');
            $table->foreign('cod_departamento')->references('id')->on('departamentos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('areas', function($table) {
            $table->dropForeign(['cod_coordinador']);
            $table->dropForeign(['cod_departamento']);
        });
    }
}
