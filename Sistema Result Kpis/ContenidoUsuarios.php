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


<h1 class="titulo_azul">Consulta Usuarios</h1>

    <?php
    //Conectamos a la db    
   $mysqli = new mysqli("localhost", "id16624654_root", "trinitis1A850928*96", "id16624654_kpis");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $query = "SELECT usuarios.*, roles.tipo, empresa.nombre empresa_nombre
    FROM usuarios
   INNER JOIN roles ON usuarios.rol =roles.id 
   INNER JOIN empresa ON usuarios.empresa_id=empresa.id order by empresa.id, usuarios.id desc ";
    $result = $mysqli->query($query);
    //Se ejecuta la consulta
    ?>
    <table id="customers" >
        <thead>
            <tr>

                <th>Usuario</th>
                <th>Nombre del Usuario</th>
                <th>Empresa</th>
                <th>Rol</th>
                <th>Descripcion</th>

            </tr>
        </thead>
        <tbody>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>

                        <td>
                            <?php echo $row['usuario'] ?>
                        </td>

                        <td>
                            <?php echo $row['nombre'] ?>
                        </td>

                        <td>
                            <?php echo $row['empresa_nombre'] ?>
                        </td>

                        <td>
                            <?php echo $row['tipo'] ?>
                        </td>

                        <td>
                            <?php echo $row['descripcion'] ?>
                        </td>

                      
                    </tr>
            <?php
                } //fin del while
            } //fin del if
            ?>

        </tbody>



        <tfoot>
            <tr>
                <th>Usuario</th>
                <th>Nombre del Usuario</th>
                <th>Empresa</th>
                <th>Rol</th>
                <th>Descripcion</th>
            </tr>
        </tfoot>
    </table>

</body>

</html>