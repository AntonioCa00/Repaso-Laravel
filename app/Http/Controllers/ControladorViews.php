<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLibros;

class ControladorViews extends Controller
{
    public function ProcessLib(ValidadorLibros $req){
        if ($req ->isMethod('post')){
            $titulo = $req ->input('Titulo');
            return redirect('Regis') -> with('confirmacion','todo correcto');
        }        
    }

    public function Welcome(){
        return view('welcome');
    }

    public function Inicio(){
        return view('Principal');
    }

    public function Registro(){
        return view('Registro');
    }
}
