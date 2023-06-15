<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//php artisan make:model Persona -m  el modelo se crea en singular con la primera letra en minuscula y la tabla en plural con el mismo nombre del modelo

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion', 
        'ruta',       
    ];
}
