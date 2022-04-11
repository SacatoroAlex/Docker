<?php
include "../conexion.php";

$imagen_grano=addslashes(file_get_contents($_FILES['imagen_grano']['tmp_name']));

$nombre_grano= $_POST['nombre_grano']; 
$precio_grano= $_POST['precio_grano'];
$cantidad_grano= $_POST['cantidad_grano']; 
$libra_grano= $_POST['libra_grano']; 

$query="INSERT INTO granos (nombre_grano,precio_grano,libra_grano,imagen_grano) VALUES ('$nombre_grano','$precio_grano','$libra_grano','$imagen_grano')";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_grano.php");
}else{
 echo"Error no se inserto la imagen";
}

?>