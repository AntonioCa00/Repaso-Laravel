@extends('Plantilla')

@section('Espacio')

    <div class="container text-center mt-5 ">
        <h1 style="color: aliceblue">Pagina de Inicio</h1>

        <section class="container" style="display: flex">
          <div class="card mb-3" style="margin-right: 50px">
            <img src="/images/libros.jpg" class="card-img-top" width="100" height="250">
            <div class="card-body">
              <h5 class="card-title">México: Una biblioteca por cada 15,000 habitantes</h5>
              <p class="card-text">Las bibliotecas en el país no cumplen con su función; la mayoría carece del material necesario y se encuentran en espacios improvisados que dificultan la consulta de libros y realización de trabajos escolares, coinciden distintos análisis sobre el tema..</p>
              <p class="card-text">Según datos de la Auditoría Superior de la Federación, El 40% de los mexicanos nunca ha entrado a una librería. Existe una librería por cada 200,000 habitantes. En todo el país hay solamente 600 librerías.</p>
              <p class="card-text"><small class="text-muted">Fuente: https://aristeguinoticias.com/2204/kiosko/mexico-una-biblioteca-publica-por-cada-15000-habitantes/</small></p>
            </div>
          </div>
          <div class="card mb-3">
            <img src="/images/internet.jpg" class="card-img-top" width="100" height="250">
            <div class="card-body">
              <h5 class="card-title">Pandemia sigue impulsando las ventas digitales de libros en México</h5>
              <p class="card-text">La ventas de libros electrónicos siguen una tendencia creciente que la llegada de la Covid-19 aceleró; para el 2020 ya representaron el 4% de la facturación total de la industria editorial y cerca del 12.3% de la población lectora dice que prefiere libros digitales respecto de impresos.</p>
              <p class="card-text">Durante el 2021 el rebote poscrisis económica las ventas de libros digitales alcanzarían cerca de 11,999 millones de pesos, un crecimiento interanual de 35%, de acuerdo con estimaciones de la Cámara Nacional de la Industria Editorial Mexicana (Caniem).</p>
              <p class="card-text"><small class="text-muted">Fuente: https://www.eleconomista.com.mx/arteseideas/Pandemia-sigue-impulsando-las-ventas-digitales-de-libros-en-Mexico-20211206-0055.html</small></p>
            </div>
          </div>
        </section>
        
    </div>
@endsection