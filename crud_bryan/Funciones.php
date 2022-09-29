<?php

if (isset($_POST["submit"])) {
    $id=$_GET['id'];
    echo"asdkbs".$id;die;
    $sql = "DELETE FROM `tienducha` WHERE id='$indice'";
    $con->query($sql);
}


function ConectarBDD($nombreBDD)
{
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd = $nombreBDD;

    $con = mysqli_connect($servidor, $usuario, $password, $bd);

    return $con;
}

function CrearTabla($con)
{
    $sql2 = "SELECT * FROM `alumnos`";
    $consulta = mysqli_query($con, $sql2);
    while ($fila = $consulta->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["nombre"] . "</td>";
        echo "<td>" . $fila["apellido"] . "</td>";
        echo "<td>" . $fila["mail"] . "</td>";
        echo "<td>" . $fila["msg"] . "</td>";
        echo "</tr>";
    }
}


