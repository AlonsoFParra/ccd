<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoUsuario;

class SelectTipoUsuario extends Component
{
    public $tipos=[];

    public function mount(){
     $this->tipos = TipoUsuario::all();
    }

    public function render()
    {
        return view('livewire.select-tipo-usuario');
    }
}
