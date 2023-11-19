@extends('layout/plantilla')

@section('tituloPagina','Clases Ya!')
<script src="{{ asset('js/filtroCurso_Clase.js') }}"></script>

@section('contenido')
@extends('layout/navbar')

<div class="container" style="padding-top: 80px;">
    <h3 style="font-weight: bold;">Estudia con profesores de calidad</h3>
    <br>
    <div class="input-group mb-3">
        <input id="filtrarAsignatura" type="text" class="form-control" placeholder="¿Qué aprendemos hoy?" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="button" id="button-addon2" onclick="filtrar()">Buscar</button>
    </div>
</div>

@foreach($dataCur as $dato)
@if( $dato->asignatura ==  'matematicas')
    <h1>Nuestro Mejores Profesores Para: {{ $dato->asignatura }}</h1>
    <div class="card" style="width: 16rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $dato->titulo }}</h5>
            <img src="{{ asset('img/2784445.png') }}" class="card-img-top" alt="...">
            <h6>Titulo: {{$dato->asignatura}}</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" data-bs-toggle="modal" onclick="modalFace()" data-bs-target="#staticBackdrop" class="btn btn-primary">Más Información</a>
        </div>
    </div>
@endif
@endforeach


<h2 id="tituloProfe">Cursos que te podrian Interesar</h2>
<div class="containerPro">
    @foreach($dataCur as $dato)
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $dato->titulo }}</h5>
                        <img src="{{ asset('img/2784445.png') }}" class="card-img-top" alt="...">
                    <h6>Titulo: {{$dato->asignatura}}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" data-bs-toggle="modal" onclick="modalFace()" data-bs-target="#staticBackdrop" class="btn btn-primary">Más Información</a>
                </div>
            </div>
    @endforeach
</div>


@endsection
