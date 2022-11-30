@extends('Plantilla')

@section('Espacio')

<div class="container text-center mt-5">
    <h1 style="color: aliceblue">Editar Libro</h1>
</div>
<div class="container mt-4 col-md-6">
    <div class="card mb-5">
        <div class="card-header mb-2">
            <h2>Datos del libro</h2>            
        </div>
        <form action="{{route('libro.update',$ConsultaLib->id_libro)}}" method="post">

            @csrf

            {!!method_field('PUT')!!}

            <div class="mb-3">
              <label class="form-label">ISBN:</label>
              <input type="number" class="form-control" name="ISBN" value="{{$ConsultaLib->isbn}}">
              <p class="text-danger fts-italic-bold">{{$errors -> first('ISBN')}}</p>
            </div>
            <div class="mb-3">
              <label class="form-label">Título:</label>
              <input type="text" class="form-control" name="Titulo" value="{{$ConsultaLib->titulo}}">
              <p class="text-danger fts-italic-bold">{{$errors -> first('Titulo')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Autor:</label>
                <select class="form-select" aria-label="Default select example" name="Autor">
                    <option selected disabled value="{{$ConsultaLib->id_autor}}">{{$ConsultaLib->autor}}</option>
                    @foreach ($Autores as $autor)
                        <option value="{{$autor->id_autor}}">{{$autor->nombre}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Paginas:</label>
                <input type="number" class="form-control" name="Paginas" value="{{$ConsultaLib->paginas}}">
                <p class="text-danger fts-italic-bold">{{$errors -> first('Paginas')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Editorial:</label>
                <input type="text" class="form-control" name="Editorial" value="{{$ConsultaLib->editorial}}">
                <p class="text-danger fts-italic-bold">{{$errors -> first('Editorial')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Email Editorial:</label>
                <input type="text" class="form-control" name="Email-Editorial" value="{{$ConsultaLib->email_edit}}">
                <p class="text-danger fts-italic-bold">{{$errors -> first('Email-Editorial')}}</p>
            </div>
            <button type="submit" class="btn btn-primary">Editar Libro</button>
        </form>
    </div>
</div>

@endsection