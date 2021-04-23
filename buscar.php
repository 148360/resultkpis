<?php

$mysqli = new mysqli ("localhost", "root", "", "kpis");
if($mysqli->connect_errno){
    echo "Error de Conexión: ".$mysqli->connect_errno;
}

$salida ="SELECT * FROM kpi ORDER By usuario_id ";
if (isset($_POST['consulta'])){
    $q= $mysqli->real_escape_string($_POST['consulta']);
    $query ="SELECT actividad, fechadecreacion, fechadeinicio, fechadetermino, tarea1, trarea2, tarea3 , detalles, comentarios FROM kpi
    Where  actividad LIKE '%".$q."%' OR fechadecreacion '%".$q."%' OR fechadeinicio '%".$q."%' OR fechadetermino '%".$q."%' OR tarea1 '%".$q."%' OR trarea2 '%".$q."%' OR tarea3 '%".$q."%' OR detalles '%".$q."%' OR comentarios '%".$q."%';
}
 $RESULTADO = $mysqli->query($query);
 if($resultado->num_row > 0){

     $salida.="<table class ='tabla_datos'>
      <thead>
        <tr>
          <td>ACTIVIDAD</td>
          <td>FECHA DE CREACION</td>
          <td>FECHA DE INICIO</td>
          <td>FECHA DE TERMINO</td>
          <td>TAREA 1</td>
          <td>TAREA 2</td>
          <td>TAREA 3</td>
          <td>DETALLES</td>
          <td>COMENTARIOS</td>
          </tr>
          </thead>
          <tbody>";
while($fila= $resultado->fetch_()){
$salida.="<tr>
<td>".$fila['actividad']."</td>
<td>".$fila['fechadecreacion']."</td>
<td>".$fila['fechadeinicio']."</td>
<td>".$fila['fechadetermino']."</td>
<td>".$fila['tarea1']."</td>
<td>".$fila['tarea2']."</td>
<td>".$fila['tarea3']."</td>
<td>".$fila['detalles']."</td>
<td>".$fila['comentarios']."</td>
</tr";
}
$salida.="</tbody></table>";
}else{
    $salida.="No hay datos:(";
}
echo $salida;
$mysqli->cloase();

?>