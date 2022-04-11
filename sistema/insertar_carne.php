<?php
include "../conexion.php";

$imagen_carne=addslashes(file_get_contents($_FILES['imagen_carne']['tmp_name']));

$nombre_carne= $_POST['nombre_carne']; 
$precio_carne= $_POST['precio_carne'];
$cantidad_carne= $_POST['cantidad_carne']; 

$query="INSERT INTO carnes (nombre_carne,precio_carne,cantidad_carne,imagen_carne) VALUES ('$nombre_carne','$precio_carne','$cantidad_carne','$imagen_carne')";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_carne.php");
}else{
 echo"Error no se inserto la imagen";
}

?>