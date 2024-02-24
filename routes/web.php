<?php

use App\Http\Controllers\apartamentosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[apartamentosController::class,'inicio'])->name('inicio');



Route::get('/apartementos/precio/{piso?}/{area}',[apartamentosController::class,'precio'])->name('apartemento.precio');

Route::get('/apartementos/duenios',[apartamentosController::class,'duenios'])->name('ver.duenios');
Route::get('/apartementos',[apartamentosController::class,'apartementos'])->name('ver.apartamentos');

Route::get ('/apartementos/crearDuenio',[apartamentosController::class,'crearDuenio'])->name('registrar.duenio');
Route::post('/apartementos/guardarDuenio',[apartamentosController::class,'guardarDuenio'])->name('guardar.duenio');

Route::get ('/apartementos/propiedadesDuenio',[apartamentosController::class,'verPropiedadesDuenio'])->name('ver.propiedades.duenio');
Route::get ('/apartementos/DuenioPropiedad',[apartamentosController::class,'verDuenioPropiedad'])->name('ver.duenio.propiedad');