<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorAutor;
use App\Http\Requests\validadorLibros;
use DB;
use Carbon\Carbon;

class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Principal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_libro()
    {
        return view('Registro');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_autor()
    {
        return view('Autores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_Libro(validadorLibros $request)
    {
        /*
        DB::table('tb_libros') -> insert([
            'ISBN'=>$request->input('ISBN'),
            'titulo'=>$request->input('Titulo'),
            'id_autor'=>$request->input(''),
        ])
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_Autor(validadorAutor $request)
    {
        DB::table('tb_autores') -> insert([
            'nombre'=>$request->input('Nombre'),
            'nacimiento'=>$request->input('Nacimiento'),
            'publicados'=>$request->input('NPublicados'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(), 
        ]);

        return redirect('autor')->with('confirmacion,confirmacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
