<?php

namespace App\Http\Controllers;
use App\Models\Ciudad;

use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function index($paisId)
    {
        return Ciudad::where('pais_id', $paisId)->get();
    }
}
