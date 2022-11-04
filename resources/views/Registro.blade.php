@extends('Plantilla')

@section('Espacio')

@if (session() -> has('confirmacion'))

     {!!"<script> Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Libro guardado con éxito',
        showConfirmButton: false,
        timer: 2500
        })</script>"!!}

@endif

<div class="container text-center mt-5">
    <h1 style="color: aliceblue">Registro de Libro</h1>
</div>
<div class="container mt-4 col-md-6">
    <div class="card mb-5">
        <div class="card-header mb-2">
            <h2>Datos del libro</h2>            
        </div>
        <form action="GuardaLibro" method="post">

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
                <input type="text" class="form-control" name="Autor" value="{{old('Autor')}}">
                <p class="text-danger fts-italic-bold">{{$errors -> first('Autor')}}</p>
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
            <button type="submit" class="btn btn-primary">Guardar Libro</button>
        </form>
    </div>
</div>

@endsection