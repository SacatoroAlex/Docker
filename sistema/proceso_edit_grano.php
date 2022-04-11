<?php
include "../conexion.php";

$idgrano = $_REQUEST['id'];

$nombre_grano= $_POST['nombre_grano']; 
$precio_grano= $_POST['precio_grano'];
$libra_grano= $_POST['libra_grano']; 

$imagen_grano=addslashes(file_get_contents($_FILES['imagen_grano']['tmp_name']));

$query = "UPDATE granos SET nombre_grano='$nombre_grano',precio_grano='$precio_grano',
libra_grano='$libra_grano',imagen_grano='$imagen_grano' 
WHERE idgrano='$idgrano'";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_grano.php");
}else{
 echo "Error en modificar";
}

?>