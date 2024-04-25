<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pais', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        }); 

        // Ingresar países manualmente
        $paises = [
            'Inglaterra',
            'Japón',
            'India',
            'Dinamarca'
        ];

        foreach ($paises as $pais) {
            DB::table('pais')->insert([
                'nombre' => $pais,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pais');
    }
}
