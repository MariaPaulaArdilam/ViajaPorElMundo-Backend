<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeleccionViajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::create('seleccion_viajes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pais_id');
            $table->unsignedBigInteger('ciudad_id');
            $table->timestamps();

            $table->foreign('pais_id')->references('id')->on('paises');
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seleccion_viajes');
    }
}
