@extends('Plantilla')
@section('Espacio')

<div class="container text-center mt-5">
    <h1 style="color: aliceblue">Editar Autor</h1>
</div>
<div class="container mt-4 col-md-6">
    <div class="card mb-5">
        <div class="card-header mb-2">
            <h2>Datos de Autor</h2>            
        </div>

        <form method="post" action="{{route('autor.update',$ConsultaAut->id_autor)}}">

            @csrf

            {!!method_field('PUT')!!}

            <div class="mb-3">
              <label class="form-label">Nombre Completo:</label>
              <input type="text" class="form-control" name="Nombre" value="{{$ConsultaAut->nombre}}">
              <p class="text-danger fts-italic-bold">{{$errors -> first('Nombre')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de nacimiento:</label>
                <input type="date" class="form-control" name="Nacimiento" value="{{$ConsultaAut->nacimiento}}">
                <p class="text-danger fts-italic-bold">{{$errors -> first('Nacimiento')}}</p>
            </div>        
            <div class="mb-3">
                <label class="form-label">No. Publicados:</label>
                <input type="text" class="form-control" name="NPublicados" value="{{$ConsultaAut->publicados}}">
                <p class="text-danger fts-italic-bold">{{$errors -> first('NPublicados')}}</p>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Libro</button>
        </form>
    </div>
</div>

    
@endsection