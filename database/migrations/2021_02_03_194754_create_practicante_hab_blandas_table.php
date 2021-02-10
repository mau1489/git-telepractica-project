<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticanteHabBlandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicante_hab_blandas', function (Blueprint $table) {
            $table->bigIncrements('id');  
                      
            $table->bigInteger('hab_blanda_id')->unsigned()->nullable();
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
        Schema::dropIfExists('practicante_hab_blandas');
    }
}
