<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicantes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('carrera_id')->unsigned()->nullable();
            $table->bigInteger('comuna_id')->unsigned()->nullable();
            $table->bigInteger('institucion_id')->unsigned()->nullable();
            $table->bigInteger('nivel_educacional_id')->unsigned()->nullable();
            $table->bigInteger('region_id')->unsigned()->nullable();
            $table->bigInteger('tipo_practica_id')->unsigned()->nullable();
            $table->bigInteger('usuario_id')->unsigned()->nullable();

            $table->string('nombre_completo', 200)->nullable();
            $table->string('run', 200)->nullable()->unique();
            $table->string('email', 200)->nullable()->unique();
            $table->string('telefono', 200)->nullable();
            $table->integer('cantidad_horas')->nullable()->default(1);
            $table->integer('cantidad_meses')->nullable()->default(1);
            $table->boolean('equipo_computacional')->nullable()->default(false);
            $table->boolean('internet_fijo')->nullable()->default(false);

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
        Schema::dropIfExists('practicantes');
    }
}
