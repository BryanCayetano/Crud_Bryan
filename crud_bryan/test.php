<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <div class="wrapper">
        <div class="logo">Tienducha el Bryan</div>
        
        <nav>
            <a href="\Recursos_Xampp\SegundoFormulario.html">Añadir Producto</a>
        </nav>
    </div>
</header>

<body class="body">
    <?php
    include 'Funciones.php';
    $con=ConectarBDD("tienducha");
    $sql = "SELECT * FROM `tienducha`";
    $consulta = mysqli_query($con, $sql);
    while ($fila = $consulta->fetch_assoc()) {

        echo "<tr>";
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["nombre"] . "</td>";
        echo "<td>" . $fila["descripcion"] . "</td>";
        echo "<td>" . $fila["tipo"] . "</td>";
        echo "<td>" . $fila["precio"] . "</td>";
        ?>
        <form action="/Funciones.php?id=<?= $fila['id'] ?>" method="post">
        <input type="submit" name="submit" value="insert"/>
    </form>
        <?php
        echo "</tr>";
        echo "<br>";
    }
    /*$sql="INSERT INTO `tienducha`(`id`, `nombre`, `descripcion`, `tipo`, `precio`) VALUES (Null,'$name','$description','$type','$price')";*/ 
    ?>
</body>

</html>