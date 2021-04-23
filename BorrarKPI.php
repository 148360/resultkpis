<?php
    //echo $_GET['Id'];
    //Conexion a la db
    $id = $_GET["Id"];
    $mysqli = new mysqli("localhost", "root", "", "kpis");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $query ="DELETE FROM kpi WHERE id = ".$id;
    if($mysqli->query($query)=== TRUE){
        //redireccionar
        //header('Location: index.php');
        echo "El registro ha sido borrado";
        echo "<br/>";
        echo "<a href='TrabajarKPIS.php'>Regresar a lista</a>";
    }else{
        echo "Error: ".$mysqli->error;
    }
    $mysqli->close();
?>