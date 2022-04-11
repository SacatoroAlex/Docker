<?php
include "../conexion.php";

$idvegetales = $_REQUEST['id'];

$nombre_vegetales= $_POST['nombre_vegetales']; 
$precio_vegetales= $_POST['precio_vegetales'];
$cantidad_vegetales= $_POST['cantidad_vegetales']; 

$imagen_vegetales=addslashes(file_get_contents($_FILES['imagen_vegetales']['tmp_name']));

$query = "UPDATE vegetales SET nombre_vegetales='$nombre_vegetales',precio_vegetales='$precio_vegetales',
cantidad_vegetales='$cantidad_vegetales',imagen_vegetales='$imagen_vegetales' 
WHERE idvegetales='$idvegetales'";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_vegetales.php");
}else{
 echo "Error en modificar";
}

?>