<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Periodo;


class TablePeriodo extends DataTableComponent
{
    protected $model = Periodo::class;
    public $columnSearch = [
        'name' => null,
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setEmptyMessage('No se encontraron registros');
        $this->setFiltersStatus(true);
        $this->setFiltersEnabled();
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Activo', 'activo')
                ->options([
                    '' => 'All',
                    'yes' => 'Yes',
                    'no' => 'No',
                ])
                ->filter(function (Builder $builder, string $value) {
                    if ($value === 'yes') {
                        $builder->where('activo', true);
                    } elseif ($value === 'no') {
                        $builder->where('activo', false);
                    }
                }),
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Nombre", "nombre")
                ->sortable()
                ->searchable(),
            Column::make("Ciclo", "ciclo")
                ->sortable(),
            Column::make("Activo", "activo")
                ->sortable(),

        ];
    }

    public function query(): Builder
    {
        return Periodo::query()
            ->when($this->getFilter('Activo'), fn ($query, $active) => $query->where('activo', $active === 'yes'));
    }
}
