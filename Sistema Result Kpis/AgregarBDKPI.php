<?php
    $usuario_id = $_POST["usuario_id"];
    $area = $_POST["area"];
 
    $actividad   = $_POST["actividad"];
    $fechadeinicio   = $_POST["fechadeinicio"];
    $fechadetermino   = $_POST["fechadetermino"];
    $tarea1 = $_POST["tarea1"];
    $tarea2 = $_POST["tarea2"]; 
    $tarea3 = $_POST["tarea3"];
    $detalles = $_POST["detalles"]; 
    
    $query ="INSERT INTO kpi (usuario_id, area, actividad, fechadecreacion, fechadeinicio, fechadetermino, tarea1, tarea2, tarea3, detalles)";
    $query .=" VALUES ('".$usuario_id."','".$area."','".$actividad."',NOW(),'".$fechadeinicio."','".$fechadetermino."','".$tarea1."','".$tarea2."','".$tarea3."','".$detalles."');";
    //echo $query;
   
    //Conexion a la db
    $mysqli = new mysqli("localhost", "id16624654_root", "trinitis1A850928*96", "id16624654_kpis");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    if($mysqli->query($query)=== TRUE){
        
    }else{
        echo "Error: ".$mysqli->error;
    }
    $mysqli->close();



?>

<script>
    window.location.href = "http://resultkpis.000webhostapp.com/ConsultasKPIs.php";
</script>
