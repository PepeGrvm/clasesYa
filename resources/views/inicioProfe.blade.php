@extends('layout/plantilla')
<link href="{{ asset('css/perfilProfe.css') }}" rel="stylesheet">
<script src="{{ asset('js/perfilProfe.js') }}"></script>
@section('tituloPagina','Clases Alumno')

@section('contenido')



<section class="section about-section gray-bg" id="about">

    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color">Bienvenido (Profesor)</h3>
                    <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6>
                    <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p>
                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Birthday</label>
                                <p>4th april 1998</p>
                            </div>
                            <div class="media">
                                <label>Age</label>
                                <p>22 Yr</p>
                            </div>
                            <div class="media">
                                <label>Residence</label>
                                <p>Canada</p>
                            </div>
                            <div class="media">
                                <label>Address</label>
                                <p>California, USA</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>E-mail</label>
                                <p>info@domain.com</p>
                            </div>
                            <div class="media">
                                <label>Phone</label>
                                <p>820-885-3321</p>
                            </div>
                            <div class="media">
                                <label>Skype</label>
                                <p>skype.0404</p>
                            </div>
                            <div class="media">
                                <label>Freelance</label>
                                <p>Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                </div>
            </div>
        </div>
        <div class="counter">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                        <p class="m-0px font-w-600">Happy Clients</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                        <p class="m-0px font-w-600">Project Completed</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                        <p class="m-0px font-w-600">Photo Capture</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                        <p class="m-0px font-w-600">Telephonic Talk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div>
        <h1>Solicitudes:</h1>
        <div>
            <div class="card" style="width: 18rem;" id="cartota">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item" id="datos-container4"></li>
                        <li class="list-group-item" id="datos-container"></li>
                        <li class="list-group-item" id="datos-container2"></li>
                        <li class="list-group-item" id="datos-container3"></li>
                      </ul> <br>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    Enviar Invitación
                </button>
                <button class="btn btn-danger" onclick="borrarAgenda()">Denegar</button>
                </div>
            </div>
        </div>

        <script>
            // Recuperar el valor almacenado en localStorage
            var mensajeAlumno = localStorage.getItem('comentarios');
            var fecha = localStorage.getItem('fecha');
            var tiempo = localStorage.getItem('tiempo');
            var asignatura = localStorage.getItem('asignatura');

            // Mostrar el valor en el contenedor
            var datosContainer = document.getElementById('datos-container');
            datosContainer.innerHTML = mensajeAlumno;
            var datosContainer2 = document.getElementById('datos-container2');
            datosContainer2.innerHTML = fecha;
            var datosContainer3 = document.getElementById('datos-container3');
            datosContainer3.innerHTML = tiempo;
            var datosContainer4 = document.getElementById('datos-container4');
            datosContainer4.innerHTML = asignatura;
        </script>
    </div>
<div>

    <h1>Proximas Clases:</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Dia</th>
            <th scope="col">Hora</th>
            <th scope="col">Usuario</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>                        <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    Enviar Invitación
                </button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>                        <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    Enviar Invitación
                </button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td>                        <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    Enviar Invitación
                </button>
            </td>
          </tr>
        </tbody>
      </table>
</div>
<div class="container" style="padding-top: 50px">
        <h3>Crear Sesión</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Iniciar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Crea tu Aula Virtual</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <input class="form-control" type="text" value={{ Illuminate\Support\Str::random(9) }}  aria-label="Disabled input example" disabled readonly>
                        <button id="botonCodigoClase" type="button" class="btn btn-outline-success"
                        onclick="copiarTexto()">Copiar Identificador</button>
                      </div>
                </div>
                <div class="modal-footer">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Entrar
                    </button>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Comencemos la clase!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input id="inputIngresoClase" type="text" class="form-control" placeholder="IDENTIFICADOR" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button onclick="redirigir()" type="button" class="btn btn-primary">Comenzar</button>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Comunicate con tu Alumno!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <input id="asignaturaInfo" placeholder="Asignatura" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="input-group mb-3">
                    <input id="codigoInvitacion" placeholder="Codigo de Invitación" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button onclick="enviarMsje()" type="button" class="btn btn-primary">Agendar</button>
            </div>
        </div>
        </div>
    </div>

<div style="padding-top: 50px">
    <h3>Crear Curso </h3>
    <a href="registroCurso"><button class="btn btn-primary">Registrar tu Curso</button>
    </a>
</div>
</section>


<script src="{{ asset('js/claseProfesor.js') }}"></script>

@endsection
