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

//Rutas controladorBD
//Ruta pagina inicial
Route::get('/',[controladorBD::class,'index']) ->name('inicio');

//Rutas vistas libro
Route::get('libro',[controladorBD::class,'create_libro'])->name('libro.create');
Route::get('libro/consulta',[controladorBD::class,'show_Libro'])->name('libro.show');
Route::get('libro/{id}/edit',[controladorBD::class,'edit_Libro'])->name('libro.edit');
Route::get('libro/{id}/delete',[controladorBD::class,'delete_Libro'])->name('libro.delete');

//Rutas vistas autor
Route::get('autor',[controladorBD::class,'create_autor'])->name('autor.create');
Route::get('autor/consulta',[controladorBD::class,'show_Autor'])->name('autor.show');
Route::get('autor/{id}/edit',[controladorBD::class,'edit_Autor'])->name('autor.edit');
Route::get('autor/{id}/delete',[controladorBD::class,'delete_Autor'])->name('autor.delete');

//Rutas procesar autor
Route::post('Autor',[controladorBD::class,'store_Autor']) ->name('autor.store');
Route::put('Autor/{id}',[controladorBD::class,'update_Autor'])->name('autor.update');
Route::delete('Autor/{id}/delete',[controladorBD::class,'destroy_Autor'])->name('autor.destroy');

//Rutas procesar libro
Route::post('Libro',[controladorBD::class,'store_Libro']) ->name('libro.store');
Route::put('Libro/{id}',[controladorBD::class,'update_Libro'])->name('libro.update');
Route::delete('Libro/{id}/delete',[controladorBD::class,'destroy_Libro'])->name('libro.destroy');
