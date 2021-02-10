<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('usuario_id')->unsigned()->nullable();
            
            $table->string('run', 200)->nullable()->unique();
            $table->string('nombre', 200)->nullable();
            $table->string('sigla', 200)->nullable();
            $table->string('web', 200)->nullable();
            $table->string('email', 200)->nullable()->unique();
            $table->string('telefono', 200)->nullable();
            
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
        Schema::dropIfExists('instituciones');
    }
}
