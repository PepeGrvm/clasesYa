@extends('layout/plantilla')

@section('tituloPagina','Registrate')

@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Registro</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label id="nombreUsu" for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="birthdate" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                        </div>

                        <div class="mb-3" id="student_fields">
                            <label for="preferences" class="form-label">Preferencias</label>
                            <input type="text" class="form-control" id="preferences" name="preferences">
                        </div>

                        <input class="form-check-input" type="checkbox" id="is_professor" name="is_professor">
                        <label class="form-check-label" for="is_professor">Soy Profesor</label>

                        <div class="div" id="professor_fields" style="display: none">
                            <label for="title" class="form-label">Título</label>
                            <input type="text" class="form-control" id="title" name="title">

                            <label for="title" class="form-label">Universidad</label>
                            <input type="text" class="form-control" id="title" name="title">

                            <label for="graduation_year" class="form-label">Año de Egreso</label>
                            <input type="date" class="form-control" id="graduation_year" name="graduation_year">

                            <label for="specialization" class="form-label">Especialización</label>
                            <input type="text" class="form-control" id="specialization" name="specialization">
                        </div>

                    </form>
                    <a href="../"><button type="submit" class="btn btn-primary" style="margin-top: 20px" >Registrarse</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        // Mostrar u ocultar campos adicionales según si el usuario es profesor o no
        $('#is_professor').change(function () {
            if (this.checked) {
                $('#professor_fields').show();
                $('#student_fields').hide();
            } else {
                $('#professor_fields').hide();
                $('#student_fields').show();
            }
        });
    });
</script>
@endsection
