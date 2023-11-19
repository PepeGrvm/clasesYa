@extends('layout/plantilla')

@section('tituloPagina','Clases Ya!')

@section('contenido')
@extends('layout/navbar')

<div class="container" style="padding-top: 80px;">
    <h3 style="font-weight: bold;">Estudia con profesores de calidad</h3>
    <br>
    <h6>👨‍🎓 Porfesores Certificados</h6>
    <h6>🤝 Primera clase totalmente gratis</h6>
    <h6>🧑‍💻 Clases totalmente personalizadas</h6>
    <h6>🕺 Para todos los niveles</h6>
    <br>

    <div class="input-group mb-3">
        <input id="buscarAsigna" type="text" class="form-control" placeholder="¿Qué aprendemos hoy?" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="button" id="button-addon2" onclick="buscar()">Buscar</button>
    </div>


</div>

<div class="containerMaterias" style="padding: 90PX;">
    <h4>Nuestra Sección de Materias</h4>
    <br>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" >
        <div class="carousel-inner">
          <div class="carousel-item active" id="carruselMat">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/artturi-jalli-gYrYa37fAKI-unsplash.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Ecuaciones</h5>
                <a href="../matematicas" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/board-3695072_1280.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Estadistica</h5>
                <a href="../matematicas" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/excel-logo-0.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Excel</h5>
                <a href="../matematicas" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>
        </div>

        <div class="carousel-item" id="carruselIng">

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/language-course-icon-vector.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Ingles B1</h5>
                <a href="../ingles" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/language-course-icon-vector.jpg') }}"  class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Ingles B2</h5>
                <a href="../ingles" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/language-course-icon-vector.jpg') }}"  class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Ingles C1</h5>
                <a href="../ingles" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>
        </div>

        <div class="carousel-item" id="carruselPf">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Nutricionista</h5>
                <a href="../profesores" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Preparador Fisico</h5>
                <a href="../profesores" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Educación Fisica</h5>
                <a href="../profesores" class="btn btn-primary">Profesores Disponibles</a>
                </div>
            </div>
        </div>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


</div>

<h2 id="tituloProfe">Profesores más recientes</h2>

<div class="containerPro">
    @foreach($dataProf as $dato)
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $dato->nombre }}</h5>
                        <img src="{{ asset('img/2784445.png') }}" class="card-img-top" alt="...">
                    <h6>Titulo: {{$dato->titulo}}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" data-bs-toggle="modal" onclick="modalFace()" data-bs-target="#staticBackdrop" class="btn btn-primary">Más Información</a>
                </div>
            </div>
        @endforeach
</div>



<div class="container" style="padding-top: 90px;">
    <h3>¿Qué Aprendemos hoy?</h3>
    <div class="container" style="padding: 20px;">
        <a href="../matematicas"><button class="btn btn-outline-primary" style="margin: 5px">Matematicas</button></a>
        <a href="../ingles"><button class="btn btn-outline-primary"style="margin: 5px">Ingles</button></a
        <a href="../matematicas"><button class="btn btn-outline-primary"style="margin: 5px">Matematicas</button></a
        <a href=""><button class="btn btn-outline-primary"style="margin: 5px">Historia</button></a
        <a href="../matematicas"><button class="btn btn-outline-primary" style="margin: 5px">Matematicas</button></a
        <a href="../ingles"><button class="btn btn-outline-primary" style="margin: 5px">Ingles</button></a
        <a href=""><button class="btn btn-outline-primary" style="margin: 5px">Historia</button></a
        <a href="../matematicas"><button class="btn btn-outline-primary" style="margin: 5px">Matematicas</button></a
        <a href="../ingles"><button class="btn btn-outline-primary" style="margin: 5px">Ingles</button></a
        <a href="../matematicas"><button class="btn btn-outline-primary" style="margin: 5px">Matematicas</button></a
        <a href=""><button class="btn btn-outline-primary" style="margin: 5px">Historia</button></a
        <a href="../ingles"><button class="btn btn-outline-primary" style="margin: 5px">Ingles</button></a
        <a href="../matematicas"><button class="btn btn-outline-primary" style="margin: 5px">Matematicas</button></a
        <a href="../mates"><button class="btn btn-outline-primary"  style="margin: 5px">Matematicas</button></a>
        <a href="../ingles"><button class="btn btn-outline-primary" style="margin: 5px">Ingles</button></a
        <a href="../matematicas"><button class="btn btn-outline-primary" style="margin: 5px">Matematicas</button></a
        <a href=""><button class="btn btn-outline-primary" style="margin: 5px">Historia</button></a
        <a href="../matematicas"><button class="btn btn-outline-primary" style="margin: 5px">Matematicas</button></a
        <a href="../ingles"><button class="btn btn-outline-primary" style="margin: 5px">Ingles</button></a
        <a href=""><button class="btn btn-outline-primary" style="margin: 5px">Historia</button></a
        <a href="../matematicas"><button class="btn btn-outline-primary" style="margin: 5px">Matematicas</button></a
        <a href="../ingles"><button class="btn btn-outline-primary" style="margin: 5px">Ingles</button></a
        <a href="../matematicas"><button class="btn btn-outline-primary" style="margin: 5px">Matematicas</button></a
        <a href=""><button class="btn btn-outline-primary" style="margin: 5px">Historia</button></a
        <a href="../ingles"><button class="btn btn-outline-primary" style="margin: 5px">Ingles</button></a
        <a href="../matematicas"><button class="btn btn-outline-primary" style="margin: 5px">Matematicas</button></a

    </div>
</div>


<div class="container" style="padding-top: 40px;">
    <h3>¿Por qué clases YA!?</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et reiciendis aliquid, ut esse fugiat a repudiandae aspernatur iusto natus dolore unde officiis quasi aut nihil maiores voluptatum veniam. Facilis, tempore.</p>
</div>





<!-- Estructura de la modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Pepito Carrion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenido de la modal -->
                <img src="{{ asset('img/2784445.png') }}" style="width: 200px" class="card-img-top" alt="...">
                <p style="padding: 10px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum natus omnis repellat voluptatem a ad nam corrupti consectetur dolorem assumenda iste, fugit pariatur aspernatur exercitationem quis eligendi quam facere laborum! Lorem ipsum dolor sit amet consectetur</p>
                <br>
                <p style="padding: 10px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, perspiciatis. $25.000</p>
                <p style="padding-left: 10px">Metodos de contacto</p>
                <p style="padding-left: 10px">Fono: +56 9 12345678 <br> Email: Pepito@Carrion.cl <br> Linkedin: @PepitoProfe123</p>
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Contactar</button>
            </div>
        </div>
    </div>
</div>

</body>
<script> function buscar(){
    var name = document.getElementById("buscarAsigna").value;
    var asig = ['ingles',
                'matematicas',
                'historia']
    if (asig.includes(name)) {
        window.location.href = "../"+name;
    }
}
function modalFace() {
        // Activa la modal al hacer clic en el enlace
        $('#staticBackdrop').modal('show');
    }
</script>
@endsection
