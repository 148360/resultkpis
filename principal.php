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

    <meta charset="utf-8">
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

            <!-- Barra lateral: marca -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!--   <i class="fas fa-laugh-wink"></i> -->
                    <i class="C:\xampp\htdocs\kpi\img\logo"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Result KPIs START <sup>2</sup></div>
            </a>
            <!--
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="~/home/index">
                <div class="sidebar-brand-icon ">
                    <img src="~/Imagenes/ADeAutocom.png" height="25"/>
                </div>
                <div class="sidebar-brand-text mx-1" style="font-size:32px;">UTOCOM</div>
            </a>

            

            <!-- Divisor -->
            <hr class="sidebar-divider my-0">

            <!-- Elemento de navegación: panel -->
            <li class="nav-item active">
                <a class="nav-link" href="principal.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tablero</span></a>
            </li>

            <!-- Divisor -->
            <hr class="sidebar-divider">

            <!-- Título -->
            <div class="sidebar-heading">
                Panel de Control
            </div>

            <!-- Elemento de navegación: menú contraer páginas -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Panel de Control</span>
                </a>
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
                </div>
            </li>



            <!-- Divisor -->
            <hr class="sidebar-divider">

            <!-- Título -->
            <div class="sidebar-heading">
                Adicionales
            </div>


            <!-- Elemento de navegación - Facebook -->
            <li class="nav-item">
                <a class="nav-link" href="https://web.facebook.com/resutl.kpis?_rdc=1&_rdr">
                    <i class="fab fa-facebook"></i>
                    <span>Facebook</span></a>
            </li>

            <!-- Elemento de navegación - Wiki -->
            <li class="nav-item">
                <a class="nav-link" href="https://es.wikipedia.org/wiki/Wikipedia:Portada">
                    <i class="fab fa-wikipedia-w"></i>
                    <span>Wiki</span></a>
            </li>

            <!-- Elemento de navegación - Juego -->
            <li class="nav-item">
                <a class="nav-link" href="juego.php">
                    <i class="fas fa-gamepad"></i>
                    <span>Juego</span></a>
            </li>


            <!-- Divisor -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Alternador de barra lateral (barra lateral) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Mensaje de la barra lateral -->

            <div class="sidebar-card">

                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
                <p class="text-center mb-2"><strong>Result KPIs STAR</strong> está repleto de características premium, componentes y más.</p>
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

                    <!-- Barra superior) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Búsqueda de barra superior -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Barra superior de navegación -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Elemento de navegación: menú desplegable de búsqueda (solo visible XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Menú desplegable - Mensajes -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Elemento de navegación: alertas -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Contador - Alertas -->
                                <span class="badge badge-danger badge-counter">10+</span>
                            </a>
                            <!-- Menú desplegable - Alertas -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Centro de alertas
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Diciembre 12, 2019</div>
                                        <span class="font-weight-bold">¡Un nuevo informe mensual está listo para descargar!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Diciembre 7, 2019</div>
                                        $290.29 ¡Se han depositado $ 290.29 en su cuenta!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Diciembre 2, 2019</div>
                                        Alerta de gasto: hemos notado un gasto inusualmente alto en su cuenta.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar todas las alertas</a>
                            </div>
                        </li>

                        <!-- Elemento de navegación - Mensajes -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Contador - Mensajes -->
                                <span class="badge badge-danger badge-counter">200</span>
                            </a>
                            <!-- Menú desplegable - Mensajes -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">¡Hola! Me pregunto si puedes ayudarme con un
                                            problema que he estado teniendo.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Tengo las fotos que ordenaste el mes pasado, ¿cómo
                                            ¿te gustaría que te los enviaran?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">El informe del mes pasado se ve muy bien, estoy muy contento con
                                            el progreso hasta ahora, ¡sigan con el buen trabajo!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">¿Soy un buen chico? La razón por la que pregunto es porque alguien
                                            me dijo que la gente le dice esto a todos los perros, incluso si no son buenos ...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Leer más mensajes</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Elemento de navegación: información del usuario -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- se agrege el nombre del usaurio -->
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $nombre; ?> </span> <!-- ////Administrador-->
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Menú desplegable - Información del usuario -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ajustes
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Registro de actividades
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- Fin de la barra superior -->

                <!-- Iniciar contenido de la página -->
                <div class="container-fluid">

                    <!-- Encabezado de página -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tablero</h1>
                        <a href="404.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Generar informe</a>


                    </div>

                    <!--<iframe  src="https://es.wikipedia.org/wiki/Result_KPI%C2%B4s" 
   
width="1224" 
height="520" > 






</iframe> -->



                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <title>Highcharts Example</title>

                        <style type="text/css">
                            #container {
                                height: 400px;
                            }

                            .highcharts-figure,
                            .highcharts-data-table table {
                                min-width: 320px;
                                max-width: 800px;
                                margin: 1em auto;
                            }

                            .highcharts-data-table table {
                                font-family: Verdana, sans-serif;
                                border-collapse: collapse;
                                border: 1px solid #EBEBEB;
                                margin: 10px auto;
                                text-align: center;
                                width: 100%;
                                max-width: 500px;
                            }

                            .highcharts-data-table caption {
                                padding: 1em 0;
                                font-size: 1.2em;
                                color: #555;
                            }

                            .highcharts-data-table th {
                                font-weight: 600;
                                padding: 0.5em;
                            }

                            .highcharts-data-table td,
                            .highcharts-data-table th,
                            .highcharts-data-table caption {
                                padding: 0.5em;
                            }

                            .highcharts-data-table thead tr,
                            .highcharts-data-table tr:nth-child(even) {
                                background: #f8f8f8;
                            }

                            .highcharts-data-table tr:hover {
                                background: #f1f7ff;
                            }
                        </style>
                    </head>

                    <body>
                        <script src="Highcharts-9.0.1/code/highcharts.js"></script>
                        <script src="Highcharts-9.0.1/code/highcharts-more.js"></script>
                        <script src="Highcharts-9.0.1/code/modules/exporting.js"></script>
                        <script src="Highcharts-9.0.1/code/modules/export-data.js"></script>
                        <script src="Highcharts-9.0.1/code/modules/accessibility.js"></script>

                        <figure class="highcharts-figure">
                            <div id="container"></div>
                            <p class="highcharts-description">
                                Esta grafica muestra dinamicamente los el estado de los KPI's de los empledados para esta empresa.
                            </p>

                            <button id="plain">Llanura</button>
                            <button id="inverted">Invertida</button>
                            <button id="polar">Polar</button>
                        </figure>


                        <?php
                        include "conexiongraf.php";
                        $query = "SELECT 
                        kpi.id, 
                        nombre,	 	
                        AREA,
                        actividad,
                        (if(CHECK1 IS NULL,0,CHECK1)+ if(CHECK2 IS NULL,0,CHECK2)+ if(CHECK3 IS NULL,0,CHECK3)+ if(CHECK4 IS NULL,0,CHECK4)+if(CHECK5 IS NULL,0,CHECK5)) total
                    FROM  kpi
                    INNER JOIN usuarios ON kpi.usuario_id = usuarios.id
                    WHERE usuarios.empresa_id = {$_SESSION['empresa_id']}
                    GROUP BY id ";
                        $result = $mysqli->query($query);
                        ?>
<?php
$categorias = array();
$data = array();

while ($filas = mysqli_fetch_assoc($result)) {
    array_push($categorias,"'".$filas['nombre']."'");
    array_push($data,$filas['total']);
}
$categorias = implode(",",$categorias);
$data = implode(",",$data);
?>

<script type="text/javascript">
const chart = Highcharts.chart('container', {
    title: {
        text: 'Chart.update'
    },
    subtitle: {
        text: 'Plain'
    },
    xAxis: {
        categories: [<?php echo $categorias; ?>]
    },
    series: [{
        type: 'column',
        colorByPoint: true,
        data: [<?php echo $data;?>],
        showInLegend: false
    }]
});

document.getElementById('plain').addEventListener('click', () => {
    chart.update({
        chart: {
            inverted: false,
            polar: false
        },
        subtitle: {
            text: 'Plain'
        }
    });
});

document.getElementById('inverted').addEventListener('click', () => {
    chart.update({
        chart: {
            inverted: true,
            polar: false
        },
        subtitle: {
            text: 'Inverted'
        }
    });
});

document.getElementById('polar').addEventListener('click', () => {
    chart.update({
        chart: {
            inverted: false,
            polar: true
        },
        subtitle: {
            text: 'Polar'
        }
    });
});

		</script>
                    </body>









                </div>
                <!-- /.contenedor-fluido -->

            </div>
            <!-- Fin del contenido principal -->

            <!-- Pie de página -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; RESULT KPi START 2021</span>
                    </div>
                </div>
            </footer>
            <!-- Fin del pie de página -->

        </div>
        <!-- Envoltorio de fin de contenido -->

    </div>
    <!-- Contenedor de fin de página -->

    <!-- Desplazarse hasta el botón superior-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal de cierre de sesión-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="destruye.php">Cerrar sesión</a>
                </div>
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