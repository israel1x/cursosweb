<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->increments('idPerfil');
            $table->string('descripcion');
            $table->string('estado');
            $table->integer('IdUsuarioCreacion');
            $table->timestamp('fechaCreacion')->nullable();
            $table->integer('IdUsuarioModificacion');
            $table->timestamp('fechaModificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil');
    }
}
