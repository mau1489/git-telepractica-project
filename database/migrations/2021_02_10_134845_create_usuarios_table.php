<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('run')->nullable()->unique();
            $table->bigInteger('email')->nullable()->unique();
            $table->bigInteger('nombre_usuario')->nullable()->unique();

            $table->bigInteger('entidad_id')->unsigned()->nullable()->unique();
            $table->bigInteger('estado_usuario_id')->unsigned()->nullable();
            $table->bigInteger('tipo_usuario_id')->unsigned()->nullable();

            $table->string('contrasena', 200)->nullable();

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
        Schema::dropIfExists('usuarios');
    }
}
