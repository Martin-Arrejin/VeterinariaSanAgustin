<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('index');
});


Route::post('turnos/mostrarTurno','App\Http\Controllers\TurnoController@mostrarTurno');
Route::get('/contacto', 'App\Http\Controllers\ContactoController@index');

/* Route::resource('/turnos', TurnoController::class); */
Route::get('/turnos', [App\Http\Controllers\TurnoController::class,'index']);
Route::get('/turnos/mostrar', [App\Http\Controllers\TurnoController::class,'show']);
Route::post('/turnos/agregar', [App\Http\Controllers\TurnoController::class,'store']);  
Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/vistaRoles',function(){
    return view('vistaRoles');
});