<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Grupo;

class TableGrupo extends DataTableComponent
{
    protected $model = Grupo::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('grado','asc');
    }

    public function columns(): array
    {
        return [
            Column::make("Grado", "grado")
                ->sortable()
                ->searchable(),
            Column::make("Grupo", "grupo")
                ->sortable(),
            Column::make("Turno id", "turno_id")
                ->sortable(),
            Column::make("Profesor Eje", "maestroEje.persona.nombre")
                ->sortable(),            
            Column::make("Tutor", "tutor.persona.nombre")            
                ->sortable(),
        ];
    }
}
