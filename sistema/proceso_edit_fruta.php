<?php
include "../conexion.php";

$idfruta = $_REQUEST['id'];

$nombre_fruta= $_POST['nombre_fruta']; 
$precio_fruta= $_POST['precio_fruta'];
$cantidad_fruta= $_POST['cantidad_fruta']; 

$imagen_fruta=addslashes(file_get_contents($_FILES['imagen_fruta']['tmp_name']));

$query = "UPDATE frutas SET nombre_fruta='$nombre_fruta',precio_fruta='$precio_fruta',
cantidad_fruta='$cantidad_fruta',imagen_fruta='$imagen_fruta' 
WHERE idfruta='$idfruta'";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_fruta.php");
}else{
 echo "Error en modificar";
}

?>