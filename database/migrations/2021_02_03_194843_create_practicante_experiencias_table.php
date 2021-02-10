<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticanteExperienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicante_experiencias', function (Blueprint $table) {
            $table->bigIncrements('id');  
                      
            $table->bigInteger('experiencia_id')->unsigned()->nullable();
            $table->bigInteger('practicante_id')->unsigned()->nullable();
            
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
        Schema::dropIfExists('practicante_experiencias');
    }
}
