<?php

session_start();

if (!isset($_SESSION['id'])) {
  header("Location: index.php");
}

$nombre = $_SESSION['nombre'];
$rol = $_SESSION['rol'];
?>








<!DOCTYPE html>
<html lang="es">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Ventana Grafica" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Sistema" content="Result KPIs START ">
  <meta name="Autor" content="OLMEL">
  <title>Sistema - Result KPIs STAR</title>
  <!-- Fuentes personalizadas para esta plantilla-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Fuentes personalizadas para esta plantilla-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Envoltorio de página -->
  <div id="wrapper">

    <!-- Barra lateral -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Barra lateral: marca --> <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <!--   <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">Result KPIs START <sup>2</sup></div>
      </a>
      <!-- Divisor -->
      <hr class="sidebar-divider my-0">
      <!-- Elemento de navegación: panel -->
      <li class="nav-item active"> <a class="nav-link" href="principal.php">
          <i class="fas fa-fw fa-tachometer-alt"></i> <span>Tablero</span></a>
      </li>
      <!-- Divisor -->
      <hr class="sidebar-divider">
      <!-- Título -->
      <div class="sidebar-heading"> Panel de Control </div>
      <!-- Elemento de navegación: menú contraer páginas -->
      <li class="nav-item"> <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i> <span>Panel de Control</span> </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menú de opciones:</h6>


            <?php if ($rol == 2) { ?>
              <a class="collapse-item" href="AgregarKPIs.php">Agregar KPI´s</a>
            <?php } ?>

            <?php if ($rol == 1) { ?>
              <a class="collapse-item" href="AgregarKPIs.php">Agregar KPI´s</a>
            <?php } ?>

            <?php if ($rol == 3) { ?>
              <a class="collapse-item" href="TrabajarKPIs.php">Trabajar con KPI's</a>
            <?php } ?>

            <?php if ($rol == 1) { ?>
              <a class="collapse-item" href="TrabajarKPIs.php">Trabajar con KPI's</a>
            <?php } ?>

            <?php if ($rol == 2) { ?>
              <a class="collapse-item" href="ConsultasKPIs.php">Consultas KPI´s</a>
            <?php } ?>

            <?php if ($rol == 1) { ?>
              <a class="collapse-item" href="ConsultasKPIs.php">Consultas KPI´s</a>
            <?php } ?>

            <?php if ($rol == 1) { ?>
              <a class="collapse-item" href="ConsultasRegistros.php">Consultas de registros</a>
            <?php } ?>

            <?php if ($rol == 1) { ?>
              <a class="collapse-item" href="ControlUsuarios.php">Control de usuarios</a>
            <?php } ?>


          </div>
      </li>
      <!-- Divisor -->
      <hr class="sidebar-divider">
      <!-- Título -->
      <div class="sidebar-heading"> Adicionales </div>
      <!-- Elemento de navegación - Facebook -->
      <li class="nav-item"> <a class="nav-link" href="https://www.youtube.com/watch?v=DWcJFNfaw9c">
          <i class="fab fa-facebook"></i> <span>Facebook</span></a> </li>
      <!-- Elemento de navegación - Wiki -->
      <li class="nav-item"> <a class="nav-link" href="https://es.wikipedia.org/wiki/Wikipedia:Portada">
          <i class="fab fa-wikipedia-w"></i> <span>Wiki</span></a> </li>
      <!-- Elemento de navegación - Juego -->
      <li class="nav-item"> <a class="nav-link" href="https://www.juegos.com">
          <i class="fas fa-gamepad"></i> <span>Juego</span></a> </li>
      <!-- Divisor -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Alternador de barra lateral (barra lateral) -->
      <div class="text-center d-none d-md-inline"> <button class="rounded-circle border-0" id="sidebarToggle"></button> </div>
      <!-- Mensaje de la barra lateral -->
      <div class="sidebar-card"> <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
        <p class="text-center mb-2"><strong>Result KPIs STAR</strong> está
          repleto de características premium, componentes y más.</p>
        <a class="btn btn-success btn-sm" href="404.html">¡Actualice a Pro!</a>
      </div>
    </ul>
    <!-- Fin de la barra lateral -->
    <!-- Envoltorio de contenido -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Contenido principal -->
      <div id="content">
        <!-- Barra superior -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Barra superior) --> <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          </button>
          <!-- Búsqueda de barra superior 
          <form class="">
          <div class="input-group"> <input class="" placeholder="" aria-label="" aria-describedby="basic-addon2" type="text">
              <div class="input-group-append"> <button class="btn btn-primary" type="button"> <i class="fas fa-search fa-sm"></i> </button>
              </div>
            </div>
          </form>
          Barra superior de navegación -->
          <ul class="navbar-nav ml-auto">
            <!-- Elemento de navegación: menú desplegable de búsqueda (solo visible XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none"> <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </a>
              <!-- Menú desplegable - Mensajes -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group"> <input class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" type="text">
                    <div class="input-group-append"> <button class="btn btn-primary" type="button"> <i class="fas fa-search fa-sm"></i> </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <!-- Elemento de navegación: alertas -->
            







            
              <!-- Menú desplegable - Mensajes -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header"> Message Center </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3"> <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">¡Hola! Me pregunto si puedes
                      ayudarme con un problema que he estado teniendo.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a> <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3"> <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Tengo las fotos que ordenaste
                      el mes pasado, ¿cómo ¿te gustaría que te los enviaran?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a> <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3"> <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">El informe del mes pasado se ve
                      muy bien, estoy muy contento con el progreso hasta
                      ahora, ¡sigan con el buen trabajo!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a> <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3"> <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">¿Soy un buen chico? La razón
                      por la que pregunto es porque alguien me dijo que la
                      gente le dice esto a todos los perros, incluso si no son
                      buenos ...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a> <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Elemento de navegación: información del usuario -->
            <li class="nav-item dropdown no-arrow"> <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nombre; ?>
                </span> <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
              </a>
              <!-- Menú desplegable - Información del usuario -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil </a> <a class="dropdown-item" href="#"> <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ajustes </a> <a class="dropdown-item" href="#"> <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Registro de actividades </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar sesión </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Fin de la barra superior -->


        <!-- Iniciar contenido de la página -->

        <div class="container-fluid">
          <!-- Encabezado de página -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Agregar KPI´s</h1>
            <a href="404.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Generar
              informe</a>
          </div>
        </div>



        <div class="container">
          <h1>Ingresa los datos</h1>
          <hr />


          <form action="AgregarBDKPI.php" method="POST">







            <!-- <div id="usuarios"></div> -->

            <br />
            <label for="Nombre">Nombre del Usuario</label>
            <br />
            <select name="usuario_id" class="form-control" id="nombre">
              <option value=""> Selecciona </option>
              <?php
              include 'conexion.php';
              $empresa_id = $_SESSION['empresa_id'];
              if ($empresa_id == 1) {
                $consulta = "SELECT * FROM usuarios";
              } else {
                $consulta = "SELECT * FROM usuarios where empresa_id={$empresa_id}";
              }




              $ejecutar = mysqli_query($mysqli, $consulta);

              ?>

              <?php foreach ($ejecutar as $opciones) :  ?>
                <option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['usuario'] ?></option>
              <?php endforeach ?>

            </select>
            <br />
            
            <!-- <input type="text" class="form-control" name="nombre" /> -->




            <label for="Area">Area</label>
            <input type="text" class="form-control" name="area" />
            <br />




           
            <!--<label for="Empresa">Empresa</label>
              <input type="text" class="form-control" name="empresa" />
              <br/> -->

            <label for="Actividad">Actividad</label>
            <input type="text" class="form-control" name="actividad" />
            <br />

            <label for="Fecha de Inicio ">Fecha de Inicio</label>
            <input type="date" class="form-control" name="fechadeinicio" />
            <br />

            <label for="Fecha de Termino">Fecha de Termino</label>
            <input type="date" class="form-control" name="fechadetermino" />
            <br />


            <label for="Tarea 1">Tarea 1</label>
            <input type="text" class="form-control" name="tarea1" />
            <br />


            <label for="Tarea 2">Tarea 2</label>
            <input type="text" class="form-control" name="tarea2" />
            <br />


            <label for="Tarea 3">Tarea 3</label>
            <input type="text" class="form-control" name="tarea3" />
            <br />


            <label for="Detalles">Detalles</label>
            <textarea class="form-control" rows="3" name="detalles"></textarea>

            <br />
            <input type="hidden" value="<?php echo $_SESSION ['empresa_id'] ?>" name="empresa_id" />

            <input type="submit" value="CREAR KPI" class="btn btn-success" />
            <a class="btn btn-primary" href="principal.php">Regresar al tablero</a>
          </form>


        </div>





        <!-- /.contenedor-fluido -->
      </div>
      <!-- Fin del contenido principal -->
      <!-- Pie de página -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto"> <span>Copyright ©
              RESULT KPi START 2021</span> </div>
        </div>
      </footer>
      <!-- Fin del pie de página -->
    </div>
    <!-- Envoltorio de fin de contenido -->
  </div>
  <!-- Contenedor de fin de página -->
  <!-- Desplazarse hasta el botón superior--> <a class="scroll-to-top rounded" href="#page-top"> </a>
  <!-- Modal de cierre de sesión-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span> </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si
          está listo para finalizar su sesión actual.</div>
        <div class="modal-footer"> <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button> <a class="btn btn-primary" href="destruye.php">Cerrar sesión</a> </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Scripts personalizados para todas las páginas-->
  <script src="js/sb-admin-2.min.js"></script>
  <!-- Complementos a nivel de pagina, sirve para las barras -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>