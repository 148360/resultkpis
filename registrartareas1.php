<?php


echo "El ID es:";
echo $_POST["id"];
echo "<br />";
//var_dump( $_POST["checkbox"]);




//Conexion a la db
$mysqli = new mysqli("localhost", "root", "", "kpis");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$query ="UPDATE kpi SET check1=null, check2=null, check3=null, check4=null, check5=null  WHERE id=$_POST[id];";
$mysqli->query($query);


if (isset($_POST["checka"])){
$array = $_POST["checka"];
foreach ($array as $llave => $valor){
    

    $query ="UPDATE kpi SET $llave=$valor WHERE id=$_POST[id];";
    echo $query;
$query ="UPDATE kpi SET $llave=$valor WHERE id=$_POST[id];";
    if($mysqli->query($query)=== TRUE){

    }else{
        echo "Error: ".$mysqli->error;
    }

    //echo "esto es: {$llave} {$valor}"; 
    echo "<br/>";
}
 
}

$query ="UPDATE kpi SET comentarios='$_POST[comentarios]' WHERE id=$_POST[id];";
echo $query;

$mysqli->query($query);
$mysqli->close();


?>

<?php
header("Location: /laboratorio2/Trabajar.php?id=$_POST[id]");
?>
