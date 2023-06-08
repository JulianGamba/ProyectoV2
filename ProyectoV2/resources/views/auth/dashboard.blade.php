<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body class="body">
<!-- html de la navbar -->
    <div class="header">
        <nav class="navbar">
            <div class="fondo container-fluid justify-content-between">
                <div class="fondo d-flex align-items-center">
                    <a class="navbar-brand" href="{{url('/')}}">LOGO</a>
                    <a class="empresa nav-link" href="{{url('/')}}">Club Leones</a>
                </div>
                <div class="fondo d-flex align-items-center">
                    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        Menú
                    </a>
                </div>
            </div>
        </nav>
    </div>
  <!-- Html de la side bar -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Servicios</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body ">
            <div>
              Escoja alguno de los servicios de la empresa
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="btn-sidebaraccordion-item">
                  <h2 class="accordion-header">
                    <button class="fondo-claro  btn-sidebar accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Campeonatos
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <a href="../campeonatos/crearcampeonato.html"><div class="accordion-body">Crear campeonato</div></a>
                    <a href="../campeonatos/crearprogramación.html"><div class="accordion-body">Crear programación</div></a>
                    <div class="accordion-body">Agregar equipo</div>
                    <div class="accordion-body">Crear partido</div>
                    </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="fondo-claro accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Entrenamientos
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <a href="../campeonatos/crearcampeonato.html"><div class="accordion-body">Crear campeonato</div></a>
                    <div class="accordion-body">Crear programación</div>
                    <div class="accordion-body">Agregar equipo</div>
                    <div class="accordion-body">Crear partido</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="fondo-claro accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Acondicionamiento fisico
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <a href="../campeonatos/crearcampeonato.html"><div class="accordion-body">Crear campeonato</div></a>
                    <div class="accordion-body">Crear programación</div>
                    <div class="accordion-body">Agregar equipo</div>
                    <div class="accordion-body">Crear partido</div>
                  </div>
                </div>
              </div>
              <div class="logout text-center">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
              
              <button type="button" class="btn btn-logout btn-outline-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</button>
              
                {{-- <a href="../Landing/landing-page.html">
                <button type="button" class="btn btn-logout btn-outline-primary" disabled>Salir</button>
              </a>

              <a class="navbar-link" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
           Logout
        </a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form> --}}
              </div>
            </div>
        </div>
        <div class="container ">
          <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
          <h1>Bienvenido querido administrador</h1>
          <p>En esta sección podrás encontrar toda la información respecto a los próximos entrenamientos a realizar, los campeonatos, así como editarlos y los planes de acondicionamiento</p>
          <h2>Campeonatos</h2>
          <p>En la sección de campeonatos podrá gestionar la creación de campeonatos, agregar los distintos equipos inscritos en el campeonato y generar las planillas de partidos al igual que sus resultados</p>
          <h2>Entrenamientos</h2>
          <p>En la sección de entrenamientos podrá publicar los diferentes entrenamientos programados con toda su información y registrar las asistencias y novedades de los entrenamientos</p>
          <h2>Acondicionamiento físico</h2>
          <p>En la sección de acondicionamiento físico podrá ver los planes asignados a los jugadores de la escuela así como ver el cumplimiento de estos mismos por parte de los desarrolladores</p>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>