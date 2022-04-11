<?php
include "../conexion.php";

$imagen_bebida=addslashes(file_get_contents($_FILES['imagen_bebida']['tmp_name']));

$bebida= $_POST['bebida']; 
$precio_bebida= $_POST['precio_bebida'];
$cantidad_bebida= $_POST['cantidad_bebida']; 
$tipo_bebida= $_POST['tipo_bebida']; 


$query="INSERT INTO bebidas (bebida,precio_bebida,cantidad_bebida,tipo_bebida,imagen_bebida) VALUES ('$bebida','$precio_bebida','$cantidad_bebida','$tipo_bebida','$imagen_bebida')";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_bebida.php");
}else{
 echo"Error no se inserto la imagen";
}

?>