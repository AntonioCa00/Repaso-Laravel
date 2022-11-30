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
    public function create_autor()
    {
        return view("Autores");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_libro()
    {
        $Autores=DB::table('tb_autores')->get();
        return view("Registro",compact('Autores'));
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

        session()->flash('autor',$request->input('Nombre'));
        return redirect('autor')->with('confirmacion,confirmacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_Libro(validadorLibros $request)
    {
        
        DB::table('tb_libros') -> insert([
            'ISBN'=>$request->input('ISBN'),
            'titulo'=>$request->input('Titulo'),
            'id_autor'=>$request->input('Autor'),
            'paginas'=>$request->input('Paginas'),
            'editorial'=>$request->input('Editorial'),
            'email_edit'=>$request->input('Email-Editorial'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(), 
        ]);
        
        return redirect('libro')->with('confirmacion,confirmacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_Autor()
    {
        $ConsultaAut = DB::table('tb_autores') ->get();
        return view('consultaAutor',compact('ConsultaAut'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_Libro()
    {
    
        /*
        select l.id_libro as id_libro,l.isbn as isbn,l.titulo as titulo,a.nombre as autor,l.paginas as paginas,l.editorial as editorial,l.email_edit as email_edit 
        from tb_libros as l, tb_autores as a 
        where l.id_autor = a.id_autor;

        */

         $ConsultaLib =DB::table('tb_libros')
         ->crossJoin('tb_autores')
         ->select('tb_libros.id_libro as id_libro', 'tb_libros.isbn as isbn', 'tb_libros.titulo as titulo', 'tb_autores.nombre as autor', 'tb_libros.paginas as paginas', 'tb_libros.editorial as editorial', 'tb_libros.email_edit as email_edit')
         ->where('tb_libros.id_autor','=',DB::raw('tb_autores.id_autor'))
         ->get();
        
        return view('consultaLibro',compact('ConsultaLib'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_Autor($id)
    {
        $ConsultaAut= DB::table('tb_autores')->where('id_autor',$id) ->first();
        return view('editAutor',compact('ConsultaAut'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_Libro($id)
    {    
        $Autores=DB::table('tb_autores')->get();
        $ConsultaLib =DB::table('tb_libros')
         ->where('id_libro',$id)
         ->crossJoin('tb_autores')
         ->select('tb_libros.id_libro as id_libro', 'tb_libros.isbn as isbn', 'tb_libros.titulo as titulo',
         'tb_autores.id_autor as id_autor', 'tb_autores.nombre as autor', 'tb_libros.paginas as paginas', 
         'tb_libros.editorial as editorial', 'tb_libros.email_edit as email_edit')
         ->where('tb_libros.id_autor','=',DB::raw('tb_autores.id_autor'))
         ->get()
         ->first();

        return view('editLibro',compact('ConsultaLib'),compact('Autores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_Autor(validadorAutor $request, $id)
    {
        DB::table('tb_autores') ->where('id_autor',$id)-> update ([
            "nombre"=>$request->input('Nombre'),
            "nacimiento"=>$request->input('Nacimiento'),
            "publicados"=>$request->input('NPublicados'),
            "updated_at"=>Carbon::now(), 
        ]);

        return redirect('autor/consulta')->with('actualizar','abc');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_Libro(validadorLibros $request, $id)
    {
        DB::table('tb_libros')->where('id_libro',$id)->update([
            'ISBN'=>$request->input('ISBN'),
            'titulo'=>$request->input('Titulo'),
            'id_autor'=>$request->input('Autor'),
            'paginas'=>$request->input('Paginas'),
            'editorial'=>$request->input('Editorial'),
            'email_edit'=>$request->input('Email-Editorial'),
            "updated_at"=>Carbon::now(), 
        ]);

        return redirect('libro/consulta')->with('actualizar','abc');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_Autor($id)
    {
        $ConsultaAut= DB::table('tb_autores')->where('id_autor',$id) ->first();
        return view('deleteAutor',compact('ConsultaAut'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_Libro($id)
    {
        $ConsultaLib =DB::table('tb_libros')
         ->where('id_libro',$id)
         ->crossJoin('tb_autores')
         ->select('tb_libros.id_libro as id_libro', 'tb_libros.isbn as isbn', 'tb_libros.titulo as titulo', 'tb_autores.nombre as autor', 'tb_libros.paginas as paginas', 'tb_libros.editorial as editorial', 'tb_libros.email_edit as email_edit')
         ->where('tb_libros.id_autor','=',DB::raw('tb_autores.id_autor'))
         ->get()
         ->first();

        return view('deleteLibro',compact('ConsultaLib'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_Autor($id)
    {
        DB::table('tb_autores') ->where('id_autor',$id)->delete();

        return redirect('autor/consulta')->with('eliminado','Eliminado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_Libro($id)
    {
        DB::table('tb_libros')->where('id_libro',$id)->delete();

        return redirect('libro/consulta')->with('eliminado','Eliminado');
    }
}
