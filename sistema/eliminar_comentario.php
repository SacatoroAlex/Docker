<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $idmensaje = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM mensajes WHERE idmensaje= $idmensaje");
    mysqli_close($conexion);
    header("location: lista_comentario.php");
}
?>