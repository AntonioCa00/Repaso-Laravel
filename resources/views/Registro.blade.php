@extends('Plantilla')

@section('Espacio')

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
              <input type="number" class="form-control" name="ISBN">
            </div>
            <div class="mb-3">
              <label class="form-label">Título:</label>
              <input type="text" class="form-control" name="Titulo">
            </div>
            <div class="mb-3">
                <label class="form-label">Autor:</label>
                <input type="text" class="form-control" name="Autor">
            </div>
            <div class="mb-3">
                <label class="form-label">Paginas:</label>
                <input type="number" class="form-control" name="Paginas">
            </div>
            <div class="mb-3">
                <label class="form-label">Editorial:</label>
                <input type="text" class="form-control" name="Editorial">
            </div>
            <div class="mb-3">
                <label class="form-label">Email Editorial:</label>
                <input type="text" class="form-control" name="Email-Editorial">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Libro</button>
        </form>
    </div>
</div>

@endsection