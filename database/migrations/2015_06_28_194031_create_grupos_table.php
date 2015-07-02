<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id_grupo');
            $table->integer('id_materia')->unsigned();
            $table->foreign('id_materia')->references('id_materia')->on('materias');
            $table->integer('id_maestro')->unsigned();
            $table->foreign('id_maestro')->references('id_maestro')->on('maestros');
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
        //
    }
}
