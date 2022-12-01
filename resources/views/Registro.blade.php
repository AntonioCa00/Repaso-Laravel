@extends('Plantilla')

@section('Espacio')

@if(session()->has('confirmacion'))
        
    {!!" <script>Swal.fire(
      'Actualización Correcta!',
      'Su libro se actualizó!',
      'success'
    )</script>"!!}
@endif

<div class="container text-center mt-5">
    <h1 style="color: aliceblue">Registro de Libro</h1>
</div>
<div class="container mt-4 col-md-6">
    <div class="card mb-5">
        <div class="card-header mb-2">
            <h2>Datos del libro</h2>            
        </div>
        <form action="{{route('libro.store')}}" method="post">

            @csrf

            <div class="mb-3">
              <label class="form-label">ISBN:</label>
              <input type="number" class="form-control" name="ISBN" value="{{old('ISBN')}}">
              <p class="text-danger fts-italic-bold">{{$errors -> first('ISBN')}}</p>
            </div>
            <div class="mb-3">
              <label class="form-label">Título:</label>
              <input type="text" class="form-control" name="Titulo" value="{{old('Titulo')}}">
              <p class="text-danger fts-italic-bold">{{$errors -> first('Titulo')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Autor:</label>
                <select class="form-select" aria-label="Default select example" name="Autor">
                    <option selected disabled>Selecciona un autor</option>
                    @foreach ($Autores as $autor)
                        <option value="{{$autor->id_autor}}">{{$autor->nombre}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Paginas:</label>
                <input type="number" class="form-control" name="Paginas" value="{{old('Paginas')}}">
                <p class="text-danger fts-italic-bold">{{$errors -> first('Paginas')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Editorial:</label>
                <input type="text" class="form-control" name="Editorial" value="{{old('Editorial')}}">
                <p class="text-danger fts-italic-bold">{{$errors -> first('Editorial')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Email Editorial:</label>
                <input type="text" class="form-control" name="Email-Editorial" value="{{old('Email-Editorial')}}">
                <p class="text-danger fts-italic-bold">{{$errors -> first('Email-Editorial')}}</p>
            </div>
            <div class="butto-group mb-2">
                <button type="submit" class="btn btn-primary"><img src="\images\guardar.png"> Guardar Libro</button>
                </form>
            </div>
            <a href="{{route('inicio')}}"><button class="btn btn-danger"><img src="\images\deshacer.png"> Regresar</button></a>
    </div>
</div>

@endsection