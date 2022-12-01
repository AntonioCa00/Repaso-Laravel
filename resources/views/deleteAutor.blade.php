@extends('Plantilla')

@section('Espacio')

<div class="container text-center mt-5">
    <h1 style="color: aliceblue">Eliminar Autor</h1>
</div>
<div class="container mt-4 col-md-6">
    <div class="card mb-5">

        <div class="card">
            <div class="card-header">
              <h4>Datos del autor</h4>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Nombre: {{$ConsultaAut->nombre}}</p>
                <p>Fecha de nacimiento: {{$ConsultaAut->nacimiento}}</p>
                <p>Numero de libros publicados:{{$ConsultaAut->publicados}} </p>
              </blockquote>
            </div>
            <div class="card-footer">
                ¿Desea eliminar este autor?
                <div class="button-group mt-1">
                    <form method="post" action="{{route('autor.destroy',$ConsultaAut->id_autor)}}">

                        @csrf 
                        {!!method_field('DELETE')!!}
        
                        <input type="hidden" value="{{$ConsultaAut->nombre}}" name="Nombre">
                        <button class="btn btn-danger" type="submit"><img src="\images\basura.png"> Eliminar</button>
                        <a href="{{route('autor.show')}}" class="btn btn-info"><img src="\images\deshacer.png"> Regresar</a>
                    </form>
                </div>
            </div>
          </div>
    
    </div>
</div>

@endsection