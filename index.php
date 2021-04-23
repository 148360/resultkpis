<?php
require "conexion.php";

session_start(); //llama al usuario


if ($_POST) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña']; //contrasenia que envias de formulario

    $sql = "SELECT id, contraseña, nombre, rol, empresa_id FROM  usuarios WHERE usuario='$usuario'";
    $resultado = $mysqli->query($sql);
    //echo $sql;
    //print_r($resultado);
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        //print_r($row);
        $contraseña_bd = $row['contraseña'];

       // $pass_c = sha1($contraseña); //codificación de contrasenia
        $pass = $contraseña;
        //comparacion de la contraseña codificada y ingresad por el usuario
       // if ($contraseña_bd == $pass_c) { // se convoca contraseña encriptada
            if ($contraseña_bd == $pass) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['rol'] = $row['rol'];
            $_SESSION['empresa_id'] = $row['empresa_id'];

            header("Location: principal.php");
        } else {

            $mensaje_de_error = "La contraseña es incorrecta";
        }
    } else {
        $mensaje_de_error = "No existe usuario";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema - Result KPIs STAR</title>

    <!-- Fuentes personalizadas para esta plantilla -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Estilos personalizados para esta plantilla -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Fila exterior -->
        <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Fila anidada dentro del cuerpo de la tarjeta -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block  " ></div>

    
                            <div> <img src="logore.jpg"  width="100%" height="100%" > </div>
                            <div class="col-lg-11">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">¡Bienvenido de nuevo!</h1>
                                    </div>
                                    <form method="post">
                                        <!-- Se agrega para que el formulario se mande asi mismo-->

                                        <div class="form-group">
                                            <input class="form-control form-control-user" id="usuario" name="usuario" type="text" aria-describedby="emailHelp" placeholder="Ingresa el Usuario..."> <!-- se agrega name="usuario" type="text" -->
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="contraseña" name="contraseña" placeholder="Constraseña">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recuerda
                                                    Me</label>
                                            </div>
                                        </div>
                                        <p class="text-danger">
                                            <?php
                                            if (isset($mensaje_de_error))
                                                echo $mensaje_de_error;
                                            ?>
                                        </p>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Iniciar sesión" />

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">¿Has olvidado tu contraseña?</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>