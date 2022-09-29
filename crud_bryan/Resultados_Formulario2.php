<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
        <tbody>

            <?php
            include 'Funciones.php';
            $con = ConectarBDD("tienducha");
            $sql = "SELECT * FROM `tienducha`";
            $consulta = mysqli_query($con, $sql);

            while ($fila = $consulta->fetch_assoc()) {
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
            }
            ?>
        </tbody>
    


</body>

</html>