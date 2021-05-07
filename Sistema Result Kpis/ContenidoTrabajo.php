<?php

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contenido</title>

    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 4px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4e73df;
            color: white;
        }

        .titulo_azul {
            background-color: #4e73df;
            color: white;
            text-align: center;
        }
    </style>

</head>

<body>

    <h1 class="titulo_azul">Trabajar con KPIs</h1>



    <table id="customers">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>AREA</th>
            <th>ACTIVIDAD</th>
            <th>FECHA DE INICIO</th>
            <th>FECHA DE TERMINO</th>
            <th>TAREA 1</th>
            <th>TAREA 2</th>
            <th>TAREA 3</th>
            <th>Detalles</th>

        </tr>

        <?php
        include "conexionbd.php";
        $empresa_id = $_SESSION['empresa_id'];
        if ($empresa_id == 1) {
            $sentencia = "SELECT kpi.*, usuarios.nombre FROM kpi
    inner JOIN usuarios ON kpi.usuario_id=usuarios.id";
        } else {
            $rol = $_SESSION['rol'];
            if ($rol == 2) {
                $sentencia = "SELECT kpi.*, usuarios.nombre FROM kpi
        inner JOIN usuarios ON kpi.usuario_id=usuarios.id
        WHERE usuarios.empresa_id ={$empresa_id}";
            } else {
                $usuario_id = $_SESSION['id'];
                $sentencia = "SELECT kpi.*, usuarios.nombre FROM kpi
        inner JOIN usuarios ON kpi.usuario_id=usuarios.id
        WHERE usuarios.empresa_id ={$empresa_id} and usuarios.id={$usuario_id}";
            }
        }

        $resultado = $mysqli->query($sentencia);
        while ($filas = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>";
            echo $filas['id'];
            echo "</td>";
            echo "<td>";
            echo $filas['nombre'];
            echo "</td>";
            echo "<td>";
            echo $filas['area'];
            echo "</td>";
            echo "<td>";
            echo $filas['actividad'];
            echo "</td>";

            $date =  date_create($filas['fechadeinicio']);
            echo "<td>";
            echo  date_format($date, 'Y-m-d');
            echo "</td>";







            $date =  date_create($filas['fechadetermino']);
            echo "<td>";
            echo  date_format($date, 'Y-m-d');
            echo "</td>";



            echo "<td>";
            echo $filas['tarea1'];
            echo "</td>";


            echo "<td>";
            echo $filas['tarea2'];
            echo "</td>";



            echo "<td>";
            echo $filas['tarea3'];
            echo "</td>";



            echo "<td>";
            echo $filas['detalles'];
            echo "</td>";
        }

        ?>

        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>AREA</th>
            <th>ACTIVIDAD</th>
            <th>FECHA DE INICIO</th>
            <th>FECHA DE TERMINO</th>
            <th>TAREA 1</th>
            <th>TAREA 2</th>
            <th>TAREA 3</th>
            <th>Detalles</th>
        </tr>

    </table>



</body>

</html>