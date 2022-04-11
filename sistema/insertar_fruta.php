<?php
include "../conexion.php";

$imagen_fruta=addslashes(file_get_contents($_FILES['imagen_fruta']['tmp_name']));

$nombre_fruta= $_POST['nombre_fruta']; 
$precio_fruta= $_POST['precio_fruta'];
$cantidad_fruta= $_POST['cantidad_fruta']; 

$query="INSERT INTO frutas (nombre_fruta,precio_fruta,cantidad_fruta,imagen_fruta) VALUES ('$nombre_fruta','$precio_fruta','$cantidad_fruta','$imagen_fruta')";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_fruta.php");
}else{
 echo"Error no se inserto la imagen";
}

?>