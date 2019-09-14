<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoRecursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_recurso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('permitedescarga');
            $table->string('formavisualizar');
            $table->string('icono');
            $table->string('estado');
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
        Schema::dropIfExists('tipo_recurso');
    }
}
