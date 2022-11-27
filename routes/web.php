<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorViews;
use App\Http\Controllers\controladorBD;

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


Route::get('/',[controladorBD::class,'index']) ->name('inicio');




Route::get('Inicio', [controladorViews::class, 'Inicio']);
Route::get('Regis', [controladorViews::class, 'Registro']);

#Ruta de Autor
Route::get('Autor',[controladorViews::class,'Autores']);

#Procesar el Autor
Route::post('GuardaAutor',[controladorViews::class,'ProcessAutor']);

#Procesar el Libro 
Route::post('GuardaLibro',[controladorViews::class,'ProcessLib']);