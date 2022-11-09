<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLibros;
use App\Http\Requests\validadorAutor;

class ControladorViews extends Controller
{
    public function ProcessLib(ValidadorLibros $req){
        if ($req ->isMethod('post')){
            $titulo = $req ->input('Titulo');

            session()->flash('tit',$titulo);
            return redirect('Regis') -> with('confirmacion','Todo correcto');
        }        
    }

    public function ProcessAut(validadorAutor $req){
        return redirect('Autor') -> with('confirmado','Se mando correctamente');
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

    public function Autores(){
        return view('Autores');
    }
}
