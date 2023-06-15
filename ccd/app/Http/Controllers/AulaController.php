<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

//php artisan make:controller NombreController -r   para crear el controlador con todos los metodos

class AulaController extends Controller
{
    public function index()
    {
        $aulas = Aula::orderBy('nombre')
            ->get();

        return view('aulas.index', ['aulas' => $aulas]);
    }

    public function create()
    {
        return view('aulas.create', ['aula' => new Aula]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'min:1'],
            'descripcion' => ['required'],
        ]);

        Aula::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        session()->flash('status', 'Aula Registrada con exito');
        return to_route('aulas.index')->with('status', 'Aula registrada con exito');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Aula $aula)
    {
        return view('aulas.edit', ['aula' => $aula]);
    }

    public function update(Request $request, $aula)
    {
        $request->validate([
            'nombre' => ['required', 'min:1'],
            'descripcion' => ['required'],

        ]);

        $aula = Aula::find($aula);
        $aula->nombre = $request->input('nombre');
        $aula->descripcion = $request->input('descripcion');
        $aula->updated_at = now();
        $aula->save();
        return to_route('aulas.index')->with('status', 'Aula actualizada con exito');
    }

    public function destroy(Aula $aula)
    {
        $aula->delete();
        return to_route('aulas.index')->with('status', 'Aula eliminada');
    }
}
