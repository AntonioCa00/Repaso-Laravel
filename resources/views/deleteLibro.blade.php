@extends('Plantilla')

@section('Espacio')

<div class="container text-center mt-5">
    <h1 style="color: aliceblue">Eliminar Libro</h1>
</div>
<div class="container mt-4 col-md-6">
    <div class="card mb-5">

        <div class="card">
            <div class="card-header">
              <h4>Datos del Libro</h4>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Nombre:</p>
                <p>Fecha de nacimiento:</p>
                <p>Numero de libros publicados:</p>
              </blockquote>
            </div>
            <div class="card-footer">
                ¿Desea eliminar este autor?
                <div class="button-group mt-1">
                    <form method="post" action="">

                        @csrf 
                        {!!method_field('DELETE')!!}
        
                        <button class="btn btn-danger" type="submit"><img src="\images\basura.png"> Eliminar</button>
                        <a href="{{route('libro.show')}}" class="btn btn-info"><img src="\images\deshacer.png"> Regresar</a>
                    </form>
                </div>
            </div>
          </div>
    
    </div>
</div>

@endsection