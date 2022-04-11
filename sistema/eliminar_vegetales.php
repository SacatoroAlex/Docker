<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $idvegetales = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM vegetales WHERE idvegetales= $idvegetales");
    mysqli_close($conexion);
    header("location: lista_vegetales.php");
}
?>