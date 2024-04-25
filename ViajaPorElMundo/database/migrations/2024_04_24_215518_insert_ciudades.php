<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertCiudades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $paises = [
            'Inglaterra' => ['Londres', 'Manchester'],
            'Japón' => ['Tokio', 'Osaka'],
            'India' => ['Delhi', 'Mumbai'],
            'Dinamarca' => ['Copenhague', 'Aarhus']
        ];

        foreach ($paises as $nombrePais => $ciudades) {
            $pais = DB::table('pais')->where('nombre', $nombrePais)->first();

            foreach ($ciudades as $nombreCiudad) {
                DB::table('ciudads')->insert([
                    'nombre' => $nombreCiudad,
                    'pais_id' => $pais->id
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('ciudads')->delete();
    }
}
