<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\Auth\RegisteredUserController;
<<<<<<< HEAD
=======


>>>>>>> 06db915d4959271d81bcbe319749e3e3647b4ea3

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/', 'welcome')->name('welcome');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/bienvenido', 'bienvenido')->name('bienvenido');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/carreras', 'carreras')->name('carreras');
Route::view('/interatic', 'interatic')->name('interatic');
Route::get('/catproy', [ProyectoController::class, 'showall'])->name('catproy');

Route::middleware('auth')->group(function () {
    Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
    Route::get('/proyectos/create', [ProyectoController::class, 'create'])->name('proyectos.create');
    Route::post('/proyectos/store', [ProyectoController::class, 'store'])->name('proyectos.store');
    Route::get('/proyectos/{proyecto}', [ProyectoController::class, 'show'])->name('proyectos.show');
    Route::get('/proyectos/{proyecto}/edit', [ProyectoController::class, 'edit'])->name('proyectos.edit');
    Route::patch('/proyectos/{proyecto}', [ProyectoController::class, 'update'])->name('proyectos.update');
    Route::delete('/proyectos/{proyecto}', [ProyectoController::class, 'destroy'])->name('proyectos.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');
    Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
    Route::post('/equipos/store', [EquipoController::class, 'store'])->name('equipos.store');
    Route::get('/equipos/{equipo}', [EquipoController::class, 'show'])->name('equipos.show');
    Route::get('/equipos/{equipo}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');
    Route::patch('/equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
    Route::delete('/equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/aulas', [AulaController::class, 'index'])->name('aulas.index');
    Route::get('/aulas/create', [AulaController::class, 'create'])->name('aulas.create');
    Route::post('/aulas/store', [AulaController::class, 'store'])->name('aulas.store');
    Route::get('/aulas/{aula}/edit', [AulaController::class, 'edit'])->name('aulas.edit');
    Route::patch('/aulas/{aula}', [AulaController::class, 'update'])->name('aulas.update');
    Route::delete('/aulas/{aula}', [AulaController::class, 'destroy'])->name('aulas.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/periodos', [PeriodoController::class, 'index'])->name('periodos.index');
    Route::get('/periodos/create', [PeriodoController::class, 'create'])->name('periodos.create');
    Route::post('/periodos/store', [PeriodoController::class, 'store'])->name('periodos.store');
    Route::get('/periodos/{aula}/edit', [PeriodoController::class, 'edit'])->name('periodos.edit');
    Route::patch('/periodos/{aula}', [PeriodoController::class, 'update'])->name('periodos.update');
    Route::delete('/periodos/{aula}', [PeriodoController::class, 'destroy'])->name('periodos.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/grupos', [GrupoController::class, 'index'])->name('grupos.index');
    Route::get('/grupos/create', [GrupoController::class, 'create'])->name('grupos.create');
    Route::post('/grupos/store', [GrupoController::class, 'store'])->name('grupos.store');
    Route::get('/grupos/{aula}/edit', [GrupoController::class, 'edit'])->name('grupos.edit');
    Route::patch('/grupos/{aula}', [GrupoController::class, 'update'])->name('grupos.update');
    Route::delete('/grupos/{aula}', [GrupoController::class, 'destroy'])->name('grupos.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/auth', [RegisteredUserController::class, 'index'])->name('usuarios.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
<<<<<<< HEAD
=======

>>>>>>> 06db915d4959271d81bcbe319749e3e3647b4ea3
