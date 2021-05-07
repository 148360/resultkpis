<?php
//echo "El ID es: {$_POST['id']}";
echo'<br/>';
$id= $_GET["Id"];
//Conexion a la db
$mysqli = new mysqli("localhost", "id16624654_root", "trinitis1A850928*96", "id16624654_kpis");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$query ="DELETE FROM usuarios WHERE id = ".$id;
    if($mysqli->query($query)=== TRUE){
        //redireccionar
        //header('Location: ConsultasUsuarios.php');
    
        }else{
            echo "Error: ".$mysqli->error;
        }
   
$mysqli->close();
?>
<script>
    window.location.href = "http://resultkpis.000webhostapp.com/ConsultasUsuarios.php";
</script>