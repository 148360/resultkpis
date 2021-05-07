<?php

$mysqli = new mysqli ("localhost", "id16624654_root", "trinitis1A850928*96", "id16624654_kpis");
if($mysqli->connect_errno){
    echo "Error de Conexión: ".$mysqli->connect_errno;
}
$mysqli->query("SET NAMES 'utf8'");

?>