@extends('Plantilla')
@section('Espacio')

<div class="container text-center mt-5">
    <h1 style="color: aliceblue">Registro de Autores</h1>
</div>
<div class="container mt-4 col-md-6">
    <div class="card mb-5">
        <div class="card-header mb-2">
            <h2>Registro de Autor</h2>            
        </div>

        @if (session() -> has('confirmacion'))

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Se ha registrado el autor!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif

        <form action="{{route('autor.store')}}" method="post">

            @csrf

            <div class="mb-3">
              <label class="form-label">Nombre Completo:</label>
              <input type="text" class="form-control" name="Nombre" value="{{old('Nombre')}}">
              <p class="text-danger fts-italic-bold">{{$errors -> first('Nombre')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de nacimiento:</label>
                <input type="date" class="form-control" name="Nacimiento" value="{{old('Nacimiento')}}">
                <p class="text-danger fts-italic-bold">{{$errors -> first('Nacimiento')}}</p>
            </div>        
            <div class="mb-3">
                <label class="form-label">No. Publicados:</label>
                <input type="text" class="form-control" name="NPublicados" value="{{old('NPublicados')}}">
                <p class="text-danger fts-italic-bold">{{$errors -> first('NPublicados')}}</p>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Libro</button>
        </form>
    </div>
</div>

    
@endsection