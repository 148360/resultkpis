<?php
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $nombre = $_POST["nombre"];
    $empresa_id= $_POST["empresa_id"];
    $rol   = $_POST["rol"];
    $descripcion   = $_POST["descripcion"];
    
    
    $query ="INSERT INTO usuarios (usuario, contraseña, nombre, empresa_id, rol, descripcion )";
    $query .=" VALUES ('".$usuario."','".$contraseña."','".$nombre."',".$empresa_id.",".$rol.",'".$descripcion."');";
    echo $query;
   
    //Conexion a la db
    $mysqli = new mysqli("localhost", "root", "", "kpis");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    if($mysqli->query($query)=== TRUE){
        
    }else{
        echo "Error: ".$mysqli->error;
    }
    $mysqli->close();

    header ('Location: ConsultasUsuarios.php');
?>
