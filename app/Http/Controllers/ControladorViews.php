<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorViews extends Controller
{
    public function ProcessLib(Request $req){
        return 'Su libro esta siendo procesado';
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
