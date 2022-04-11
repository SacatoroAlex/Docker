<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $idbebida = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM bebidas WHERE idbebida= $idbebida");
    mysqli_close($conexion);
    header("location: lista_bebidas.php");
}
?>