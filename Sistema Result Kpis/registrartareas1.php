<?php
//echo "El ID es: {$_POST['id']}";
echo'<br/>';

//Conexion a la db
$mysqli = new mysqli("localhost", "id16624654_root", "trinitis1A850928*96", "id16624654_kpis");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$query ="UPDATE kpi SET check1=null, check2=null, check3=null, check4=null, check5=null  WHERE id={$_POST['id']};";
echo'<br/>';
$mysqli->query($query);
if (isset($_POST["checka"])){
    $array = $_POST["checka"];
    foreach ($array as $llave => $valor){
        //echo "esto es: {$llave} {$valor}"; 
        $query ="UPDATE kpi SET $llave=$valor WHERE id={$_POST['id']};";
        //echo $query;
        echo "<br/>";
        if($mysqli->query($query)=== TRUE){
    
        }else{
            echo "Error: ".$mysqli->error;
        }
    }
}
$query ="UPDATE kpi SET comentarios='$_POST[comentarios]' WHERE id={$_POST['id']};";
//echo $query;

$mysqli->query($query);
$mysqli->close();
?>
<script>
    window.location.href = "http://resultkpis.000webhostapp.com/TrabajarKPIs.php";
</script>