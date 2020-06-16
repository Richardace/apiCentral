<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('documento', 100);
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('sexo', 100);
            $table->string('telefono', 100);
            $table->string('pregunta_secreta', 100);
            $table->string('respuesta_secreta', 100);
            $table->string('correo', 100);
            $table->string('tipo_usuario', 100);
            $table->string('estado', 100);
            $table->string('password', 100);
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
