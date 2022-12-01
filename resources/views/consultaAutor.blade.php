@extends('Plantilla')

@section('Espacio')

@if(session()->has('actualizar'))
        
    <script type="text/javascript">Swal.fire(
      'Actualización Correcta!',
      'Su autor {{session('nombre')}} se actualizó!',
      'success'
    )</script>
@endif

@if(session()->has('eliminado'))
        
    <script type="text/javascript">Swal.fire(
      'Eliminación Correcta!',
      'Su autor {{session('nombre')}} se eliminó!',
      'success'
    )</script>
@endif

<div class="container text-center mt-5">
    <h1 style="color: aliceblue">Editar Autor</h1>
</div>
<div class="container mt-4">
    <div class="card mb-5">
        <table class="table-primary table-bordered">
            <thead>
              <tr class="table-primary">
                <th>ID:</th>
                <th>Nombre:</th>
                <th>Fecha Nacimiento:</th>
                <th>No° Libros Publicados:</th>
                <th>Opciones:</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($ConsultaAut as $autor)
                <tr class="table-primary">
                    <th scope="row">{{$autor->id_autor}}</th>
                    <td>{{$autor->nombre}}</td>
                    <td>{{$autor->nacimiento}}</td>
                    <td>{{$autor->publicados}}</td>
                    <td>
                        <a href="{{route('autor.edit',$autor->id_autor)}}"><img src="\images\editar.png"></a>
                        <a href="{{route('autor.delete',$autor->id_autor)}}"><img src="\images\eliminar.png"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection