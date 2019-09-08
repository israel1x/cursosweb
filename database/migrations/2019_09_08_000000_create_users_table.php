<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->integer('tipoPerfil_id')->unsigned();
            $table->foreign('tipoPerfil_id')->references('id')->on('tipoPerfil');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('IdUsuarioCreacion');
            $table->integer('IdUsuarioModificacion');
            $table->timestamp('fechaCreacion')->nullable();
            $table->timestamp('fechaModificacion')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}