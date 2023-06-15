<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = [
        'grado',
        'grupo', 
        'turno_id', 
        'maestro_id',
        'maestro_eje_id',
        'periodo_id',
        'carrera_id',                      
    ];
    
          
    public function maestroEje()
    {
        return $this->belongsTo(Maestro::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Maestro::class);
    }
    public function periodo()
    {
        return $this->belongsTo(Periodo::class);
    }
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }


}
