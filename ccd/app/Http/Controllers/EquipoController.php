<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Alumno;

//php artisan make:controller NombreController -r   para crear el controlador con todos los metodos

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::get();

        return view('equipos.index', ['equipos' => $equipos]);
    }

    public function create()
    {
        $alumnos = Alumno::get();
        return view('equipos.create', ['alumnos' => $alumnos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
