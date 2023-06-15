<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_proyecto',
        'id_alumno', 
               
    ];

    public function alumno(){    
    return $this->belongsTo(Alumno::class);
    }

   

}
