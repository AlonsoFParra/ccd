<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrera;
use App\Models\Grupo;

class SelectGrupo extends Component
{
  
    public $carreras = [], $grupos = [];

    public function mount()
    {
        $this->carreras = Carrera::all();
        $this->grupos = collect();
    }

    public function updated($value)
    {
        $this->grupos = Grupo::where('carrera_id', $value)->get();
       
    }

    public function render()
    {
        return view('livewire.select-grupo');
    }
}
