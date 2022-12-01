@extends('Plantilla')

@section('Espacio')

@if(session()->has('actualizar'))
        
    {!!" <script>Swal.fire(
      'Actualización Correcta!',
      'Su libro se actualizó!',
      'success'
    )</script>"!!}
@endif

@if(session()->has('eliminado'))
        
    {!!" <script>Swal.fire(
      'Eliminación Correcta!',
      'Su libro se eliminó!',
      'success'
    )</script>"!!}
@endif

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
                    <td>{{$libro->isbn}}</td>
                    <td>{{$libro->titulo}}</td>
                    <td>{{$libro->autor}}</td>
                    <td>{{$libro->paginas}}</td>
                    <td>{{$libro->editorial}}</td>
                    <td>{{$libro->email_edit}}</td>
                    <td>
                        <a href="{{route('libro.edit',$libro->id_libro)}}"><img src="\images\editar.png" alt=""></a>
                        <a href="{{route('libro.delete',$libro->id_libro)}}"><img src="\images\eliminar.png" alt=""></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection