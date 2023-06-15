<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrera;

class SelectCarrera extends Component
{
    public $carreras=[];

    public function mount(){
     $this->carreras = Carrera::all();
    }
    public function render()
    {
        return view('livewire.select-carrera');
    }
}
