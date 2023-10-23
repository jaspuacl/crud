<?php
include './Conexion.php';
$consulta = "SELECT * FROM tienda";
$resultado = $mysqli->query($consulta);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>CRUD</title>
    </head>
    <body>
        <div>
            <a href="agregar.php">Nuevo</a>
            <table>
                <thead>
                    <tr>
                        <th>ID_TIENDA</th>
                        <th>NOMBRE_T</th>
                        <th>CANTIDAD</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <tr>
                            <td><?php echo $fila['id_tienda']; ?></td>
                            <td><?php echo $fila['nombre_t']; ?></td>
                            <td><?php echo $fila['cantidad']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>