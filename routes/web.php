<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorViews;

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

Route::get('/', [controladorViews::class, 'Welcome']);
Route::get('Inicio', [controladorViews::class, 'Inicio']);
Route::get('Regis', [controladorViews::class, 'Registro']);

Route::post('GuardaLibro',[controladorViews::class,'ProcessLib']);