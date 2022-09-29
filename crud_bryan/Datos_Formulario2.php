<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "tienducha";
$con = mysqli_connect($servidor, $usuario, $password, $bd);

if (!$con) {
    print_r("No se ha podido conectar" . mysqli_connect_error());
    die;
} else {
    mysqli_set_charset($con, "utf8");
    echo "Se ha establecido la conexión";
}

$product_name = $_POST['name'];
$product_description = $_POST['description'];
$product_type = $_POST['type'];
$product_price = $_POST['price'];

$sql = ""; //insert
$sql = "INSERT INTO `tienducha`(`id`, `nombre`, `descripcion`, `tipo`, `precio`) VALUES (Null,'$product_name','$product_description','$product_type','$product_price')";

$consulta = mysqli_query($con, $sql);

if (!$consulta) {
    die("No se ha podido realizar el insert");
} else {
    echo "El insert se ha realizado correctamente";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'Funciones.php';
    $con = ConectarBDD("tienducha");
    $sql2 = "SELECT * FROM `tienducha`";
    $consulta = mysqli_query($con, $sql2);

    while ($fila = $consulta->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["nombre"] . "</td>";
        echo "<td>" . $fila["descripcion"] . "</td>";
        echo "<td>" . $fila["tipo"] . "</td>";
        echo "<td>" . $fila["precio"] . "</td>";
        echo "</tr>";
        echo "<br>";
    }
    ?>

</body>

</html>