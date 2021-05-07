<?php
    //echo $_GET['Id'];
    //Conexion a la db
    $id = $_GET["Id"];
    $mysqli = new mysqli("localhost", "id16624654_root", "trinitis1A850928*96", "id16624654_kpis");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $query ="DELETE FROM kpi WHERE id = ".$id;
    if($mysqli->query($query)=== TRUE){
    
    }else{
        echo "Error: ".$mysqli->error;
    }
    $mysqli->close();
?>
<script>
    window.location.href = "http://resultkpis.000webhostapp.com/ConsultasKPIs.php";
</script>