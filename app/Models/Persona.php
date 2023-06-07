<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido_pat', 
        'apellido_mat', 
        'direccion',
        'telefono',      
    ];

    public function alumno()
    {
        return $this->hasOne(Alumno::class);
    }
   
}
