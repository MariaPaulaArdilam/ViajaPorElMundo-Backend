<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seleccion_viajes extends Model
{
    use HasFactory;
    protected $fillable = ['pais_id', 'ciudad_id'];

    public function presupuesto()
    {
        return $this->belongsTo(Presupuesto::class, 'valor');
    }
}
