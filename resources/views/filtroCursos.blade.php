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
@if( $dato->asignatura == $asignaturaSeleccionada)
    <h1 style="padding-top: 50px">Cursos Destacados de {{ $dato->asignatura }}</h1>
    <div class="card" style="width: 16rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $dato->titulo }}</h5>
            <img src="{{ asset('img/excel-logo-0.png') }}" class="card-img-top" alt="...">
            <h6>Titulo: {{$dato->asignatura}}</h6>
            <p class="card-text">Descripcion:</p>
            <a href="#" data-bs-toggle="modal" onclick="modalFace()" data-bs-target="#staticBackdrop" class="btn btn-primary">Más Información</a>
        </div>
    </div>
@endif
@endforeach

<br>
<br>
<h2 id="tituloProfe">Cursos que te podrian Interesar</h2>
<div class="containerPro">
    @foreach($dataCur as $dato)
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $dato->titulo }}</h5>
                        <img src="{{ asset('img/excel-logo-0.png') }}" class="card-img-top" alt="...">
                    <h6>Titulo: {{$dato->asignatura}}</h6>
                    <p class="card-text">Descripcion:</p>
                    <a href="#" data-bs-toggle="modal" onclick="modalFace()" data-bs-target="#staticBackdrop" class="btn btn-primary">Más Información</a>
                </div>
            </div>
    @endforeach
</div>


@endsection
