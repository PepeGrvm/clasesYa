@extends('layout/plantilla')

@section('tituloPagina','Agregar Alumno')

@section('contenido')

<div class="card">
    <div class="card-header">
      Agregar Alumno
    </div>
    <div class="card-body">
      <h5 class="card-title">Alumno:</h5>
      <p class="card-text">
        <form action={{route("registro.store")}} method="POST">
            @csrf
            <label for="">Apellido Paterno</label>
            <input type="text" name="paterno" id="" class="form-control" required>
            <label for="">Apellido Materno</label>
            <input type="text" name="materno" id="" class="form-control" required>
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="" class="form-control" required>
            <label for="">Contraseña</label>
            <input type="text" name="password" id="" class="form-control" required>
            <label for="">Email</label>
            <input type="text" name="email" id="" class="form-control" required>
            <label for="">Fecha Nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="" class="form-control" required>
            <br>
            <button class="btn btn-primary">Agregar</button>
            <a href="{{route('registro.index')}}">Regresar</a>
        </form>
      </p>

    </div>
  </div>

@endsection
