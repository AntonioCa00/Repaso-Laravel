@extends('Plantilla')

@section('Espacio')

<div class="container text-center mt-5">
    <h1 style="color: aliceblue">Editar Libro</h1>
</div>
<div class="container mt-4">
    <div class="card mb-5">
        <table class="table-primary table-bordered">
            <thead>
              <tr class="table-primary">
                <th>ID:</th>
                <th>ISBN:</th>
                <th>Titulo:</th>
                <th>Autor:</th>
                <th>Páginas:</th>
                <th>Editorial:</th>
                <th>Email Editorial:</th>
                <th>Opciones:</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($ConsultaLib as $libro)
                <tr class="table-primary">
                    <th scope="row">{{$libro->id_libro}}</th>
                    <td>{{$libro->ISBN}}</td>
                    <td>{{$libro->titulo}}</td>
                    <td>{{$libro->id_autor}}</td>
                    <td>{{$libro->paginas}}</td>
                    <td>{{$libro->editorial}}</td>
                    <td>{{$libro->email_edit}}</td>
                    <td>
                        <a href="{{route('libro.edit',$libro->id_libro,$libro->id_autor)}}"><img src="\images\editar.png" alt=""></a>
                        <a href="#"><img src="\images\eliminar.png" alt=""></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection