@extends('layout/plantilla')

@section('tituloPagina','Clases Ya!')

@section('contenido')

    <div class="card">
        <div class="card-header">
          Crud con laravel
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{$mensaje}}
                    </div>
                    @endif
                </div>
            </div>
          <h5 class="card-title">Listado de Alumnos</h5>
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Fecha Nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $dato)
                        <tr>
                            <td>{{$dato->nombre}}</td>
                            <td>{{$dato->paterno}}</td>
                            <td>{{$dato->materno}}</td>
                            <td>{{$dato->fecha_nacimiento}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                    {{-- <a href="{{route('alumnos.create')}}">Agregar</a> --}}

                </table>
            </div>
        </div>
    </div>

@endsection
