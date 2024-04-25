<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presupuesto extends Model
{
    use HasFactory;
    protected $fillable = ['valor'];

    public function seleccionViaje()
    {
        return $this->hasOne(SeleccionViaje::class, 'valor');
    }
}
