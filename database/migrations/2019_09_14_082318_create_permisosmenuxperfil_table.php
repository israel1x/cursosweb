<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosmenuxperfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisosmenuxperfil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('perfil_id');
            $table->string('opcion_id');
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
        Schema::dropIfExists('permisosmenuxperfil');
    }
}
