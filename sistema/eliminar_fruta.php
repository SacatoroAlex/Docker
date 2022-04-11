<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $idfruta = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM frutas WHERE idfruta= $idfruta");
    mysqli_close($conexion);
    header("location: lista_frutas.php");
}
?>