<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('descripcionlarga');
            $table->string('prerequisito');
            $table->string('objetivos');
            $table->string('estado');
            $table->integer('areaconocimiento_id')->unsigned();
            $table->foreign('areaconocimiento_id')->references('id')->on('area_conocimiento');
            $table->integer('IdUsuarioCreacion')->nullable();
            $table->integer('IdUsuarioModificacion')->nullable();
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
        Schema::dropIfExists('cursos');
    }
}
