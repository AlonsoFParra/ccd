<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Periodo;

class SelectPeriodo extends Component
{

    public $periodos=[];

    public function mount(){
     $this->periodos = Periodo::all();
    }
    public function render()
    {
        return view('livewire.select-periodo');
    }
}
