<?php
include "../conexion.php";

$imagen_vegetales=addslashes(file_get_contents($_FILES['imagen_vegetales']['tmp_name']));

$nombre_vegetales= $_POST['nombre_vegetales']; 
$precio_vegetales= $_POST['precio_vegetales'];
$cantidad_vegetales= $_POST['cantidad_vegetales']; 


$query="INSERT INTO vegetales (nombre_vegetales,precio_vegetales,cantidad_vegetales,imagen_vegetales) VALUES ('$nombre_vegetales','$precio_vegetales','$cantidad_vegetales','$imagen_vegetales')";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_vegetales.php");
}else{
 echo"Error no se inserto la imagen";
}

?>