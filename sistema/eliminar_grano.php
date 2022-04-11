<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $idgrano = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM granos WHERE idgrano= $idgrano");
    mysqli_close($conexion);
    header("location: lista_granos.php");
}
?>