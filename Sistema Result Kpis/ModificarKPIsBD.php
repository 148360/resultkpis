<?php
//print_r($_POST);

$id=$_POST["id"];

$area=$_POST["area"];

$actividad=$_POST["actividad"];
$fechadeinicio=$_POST["fechadeinicio"];
$fechadetermino=$_POST["fechadetermino"];
$tarea1=$_POST["tarea1"];
$tarea2=$_POST["tarea2"];
$tarea3=$_POST["tarea3"];
$detalles=$_POST["detalles"];
$comentarios=$_POST["comentarios"];

include 'conexion.php';
$sql = "UPDATE kpi SET  area='{$area}',  
actividad='{$actividad}', fechadeinicio='{$fechadeinicio}', 
fechadetermino='{$fechadetermino}', tarea1='{$tarea1}', tarea2='{$tarea2}', 
tarea3='{$tarea3}', detalles='{$detalles}', comentarios='{$comentarios}' WHERE id={$id}";
// echo $sql;

 if ($mysqli->query($sql) === TRUE) {
  echo "se actualizaron los datos";
} else {
  echo "Error al guardar la actualizacion: " . $mysqli->error;
}

$mysqli->close(); 
?>

<script>
    window.location.href = "http://resultkpis.000webhostapp.com/ConsultasRegistros.php";
</script>
