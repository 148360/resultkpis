<?php
//print_r($_POST);

$id=$_POST["id"];
$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];


include 'conexion.php';
$sql = "UPDATE usuarios SET   
usuario='{$usuario}', contraseña='{$contraseña}', 
nombre='{$nombre}', descripcion='{$descripcion}' WHERE id={$id}";
// echo $sql;
 if ($mysqli->query($sql) === TRUE) {
  echo "se actualizaron los datos";
} else {
  echo "Error al guardar la actualizacion: " . $mysqli->error;
}

$mysqli->close();
