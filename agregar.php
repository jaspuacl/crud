<div>
    <form>
        <label>Nombre:</label><br>
        <input type="text" name="txtuser"><br>
        <label>Cantidad:</label><br>
        <input type="number" name="txtcant"><hr>
        <input type="submit" name="" value="Agregar">
        <a href="index.php">Regresar</a>
    </form>
</div>

<?php 
    include 'conexion.php';
    $name=$_GET['txtuser'] ??null;
    $cant=$_GET['txtcant'] ??null;
    if ($name!=null|| $cant!=null) {
        $sql= "insert into tienda(nombre_t,cantidad)values('".$name."','".$cant."')";
        $mysqli->query($sql);
        if($name=1){
            header("location:index.php");
        }
    }
    ?>

