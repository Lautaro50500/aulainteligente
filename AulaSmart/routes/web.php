<?php

use Illuminate\Support\Facades\Route;

// Importar los controladores
use App\Http\Controllers\AulaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\FocoController;
use App\Http\Controllers\AireController;
use App\Http\Controllers\CortinaController;
use App\Http\Controllers\MuebleController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\DisponibilidadController;

Route::get('/', function () {
    return view('welcome');
});

// ======================
//   CRUD PRINCIPALES
// ======================
Route::resource('aulas', AulaController::class);
Route::resource('docentes', DocenteController::class);
Route::resource('materias', MateriaController::class);
Route::resource('reservas', ReservaController::class);
Route::resource('horarios', HorarioController::class);

// ======================
//   CRUD DISPOSITIVOS
// ======================
Route::resource('focos', FocoController::class);
Route::resource('aires', AireController::class);
Route::resource('cortinas', CortinaController::class);
Route::resource('muebles', MuebleController::class);

// ======================
//   OTROS CRUD
// ======================
Route::resource('historiales', HistorialController::class);
Route::resource('disponibilidades', DisponibilidadController::class);


Route::get('materia/', [MateriaController::class, 'index'])->name('materias.index');