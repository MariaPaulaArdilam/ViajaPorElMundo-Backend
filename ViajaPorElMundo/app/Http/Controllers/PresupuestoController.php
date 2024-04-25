<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presupuesto;

class PresupuestoController extends Controller
{
    public function guardar(Request $request)
    {
        $presupuesto = new Presupuesto();
        $presupuesto->valor = $request->input('valor');
        $presupuesto->save();
    
     
        return response()->json(['mensaje' => 'Presupuesto guardado correctamente']);
    }

    public function obtenerClima()
    {

        $response = Http::get('URL_DE_LA_API_EXTERNA');

    if ($response->successful()) {
        $dato = $response->json(); // Obtener el dato en formato JSON
        return $dato;
    } else {
        return "Error al obtener el dato de la API externa";
    
    }

    

   
    }

}
