<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//php artisan make:model Alumno -cr -m  el modelo se crea en singular con la primera letra en minuscula y la tabla en plural con el mismo nombre del modelo

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricula',
        'persona_id', 
        'estatus_id',               
    ];
    
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

}
