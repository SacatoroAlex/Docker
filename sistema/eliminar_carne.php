<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $idcarne = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM carnes WHERE idcarne= $idcarne");
    mysqli_close($conexion);
    header("location: lista_carne.php");
}
?>