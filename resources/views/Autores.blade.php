@extends('Plantilla')
@section('Espacio')

<div class="container text-center mt-5">
    <h1 style="color: aliceblue">Registro de Autores</h1>
</div>
<div class="container mt-4 col-md-6">
    <div class="card mb-5">
        <div class="card-header mb-2">
            <h2>Datos de Autor</h2>            
        </div>

        @if (session() -> has('confirmacion'))

        <script type="text/javascript">
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Libro {{session('autor')}} guardado con éxito',
            showConfirmButton: false,
            timer: 2500
            })
    </script>

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

            <button type="submit" class="btn btn-primary">Guardar Autor</button>
        </form>
    </div>
</div>

@endsection