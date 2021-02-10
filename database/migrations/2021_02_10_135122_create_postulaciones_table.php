<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulaciones', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('estado_post_id')->unsigned()->nullable();
            $table->bigInteger('oferta_id')->unsigned()->nullable();
            $table->bigInteger('practicante_id')->unsigned()->nullable();
           
            $table->string('nombre', 200)->nullable();
            $table->string('descripcion', 200)->nullable()->unique();
            $table->string('fecha', 200)->nullable()->unique();
            $table->string('hora', 200)->nullable();
            $table->string('requisitos_min', 200)->nullable();
            $table->integer('cupos_totales')->nullable()->default(0);
            $table->integer('postulaciones_recibidas')->nullable()->default(0);

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
        Schema::dropIfExists('postulaciones');
    }
}
