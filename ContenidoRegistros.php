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
            padding: 2px;
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


    <h1 class="titulo_azul">Consulta Registros</h1>


    <?php
    //Conectamos a la db    
    $mysqli = new mysqli("localhost", "root", "", "kpis");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $query = "SELECT kpi.*, usuarios.nombre usuario_nombre, empresa.nombre empresa_nombre
                           FROM kpi
                           INNER JOIN usuarios ON kpi.usuario_id=usuarios.id
                           INNER JOIN empresa ON usuarios.empresa_id=empresa.id  
                           order by kpi.id DESC ";
    $result = $mysqli->query($query);
    //Se ejecuta la consulta

    ?>
    <table id="customers">

        <thead>

        <tr>
            <th>Nombre</th>
            <th>Area</th>
            <th>Empresa</th>
            <th>Actividad</th>
            <th>Fecha de Creacion</th>
            <th>Fecha de Inicio</th>
            <th>Indicador1</th>
            <th>Fecha de Termino</th>
            <th>Indicador2</th>
            <th>Tarea 1</th>
            <th>Indicador3</th>
            <th>Tarea 2</th>
            <th>Indicador4</th>
            <th>Tarea 3</th>
            <th>Indicador5</th>
            <th>Detalles</th>
            <th>Comentarios</th>
            </tr>
        </thead>
        <tbody>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td>
                            <?php echo $row['usuario_nombre'] ?>
                        </td>
                        <td>
                            <?php echo $row['area'] ?>
                        </td>
                        <td>
                            <?php echo $row['empresa_nombre'] ?>
                        </td>
                        <td>
                            <?php echo $row['actividad'] ?>
                        </td>
                        <td>
                            <?php echo date_format(date_create($row['fechadecreacion']), 'Y-m-d') ?>
                        </td>
                        <td>
                            <?php echo date_format(date_create($row['fechadeinicio']), 'Y-m-d') ?>
                        </td>

                        <td>
                            <?php echo $row['check1'] ?>
                        </td>

                        <td>
                            <?php echo date_format(date_create($row['fechadetermino']), 'Y-m-d') ?>
                        </td>

                        <td>
                            <?php echo $row['check2'] ?>
                        </td>

                        <td>
                            <?php echo $row['tarea1'] ?>
                        </td>

                        <td>
                            <?php echo $row['check3'] ?>
                        </td>

                        <td>
                            <?php echo $row['tarea2'] ?>
                        </td>

                        <td>
                            <?php echo $row['check4'] ?>
                        </td>

                        <td>
                            <?php echo $row['tarea3'] ?>
                        </td>

                        <td>
                            <?php echo $row['check5'] ?>
                        </td>


                        <td>
                            <?php echo $row['detalles'] ?>
                        </td>

                        <td>
                            <?php echo $row['comentarios'] ?>
                        </td>
                    </tr>
            <?php
                } //fin del while
            } //fin del if
            ?>

        </tbody>

        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Area</th>
                <th>Empresa</th>
                <th>Actividad</th>
                <th>Fecha de Creacion</th>
                <th>Fecha de Inicio</th>
                <th>Indicador1</th>
                <th>Fecha de Termino</th>
                <th>Indicador2</th>
                <th>Tarea 1</th>
                <th>Indicador3</th>
                <th>Tarea 2</th>
                <th>Indicador4</th>
                <th>Tarea 3</th>
                <th>Indicador5</th>
                <th>Detalles</th>
                <th>Comentarios</th>
            </tr>
        </tfoot>
    </table>

</body>

</html>