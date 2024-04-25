<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\CiudadController;
use APP\Http\Controllers\PresupuestoController;
use App\Http\Controllers\ViajeController;

Route::get('/paises', [PaisController::class, 'index']);
Route::get('/paises/{id}/ciudades', [CiudadController::class, 'index']);
Route::post('/guardar-presupuesto', 'App\Http\Controllers\PresupuestoController@guardar');
Route::post('/seleccion-viaje', [ViajeController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
