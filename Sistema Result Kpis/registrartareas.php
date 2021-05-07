<?php
echo $_POST["id"];
var_dump( $_POST["checkbox"]);


$link = mysqli_connect("localhost", "id16624654_root", "trinitis1A850928*96", "id16624654_kpis");
if ($link) {
    mysqli_select_db($link, "kpis");
}
$checkbox = $_POST['checkbox'];
//var_dump($checkbox);

foreach ($checkbox as $id => $valor) {
  
    $indicador1="Update kpi SET check1={$valor} where id={$id}"; 
    mysqli_query($link, $indicador1);

}



?>

<a href="TrabajarKPIs.php">Regresar a Lista de KPI's</a>