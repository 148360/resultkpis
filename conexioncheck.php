<?php

$link = mysqli_connect("localhost", "root", "");
if ($link) {
    mysqli_select_db($link, "kpis");
}
//$checkbox = $_POST['check1'];
//var_dump($checkbox);


//foreach ($checkbox as $id => $value) {
    //echo $id;
    //echo "<br/>";
    //echo $valor;
    //echo "<br/>";
  //  $indicador1="Update kpi SET check1={$valor} where id={$id}"; 
   // mysqli_query($link, $indicador1);


?>