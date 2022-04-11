<?php
include "../conexion.php";

$idcarne = $_REQUEST['id'];

$nombre_carne= $_POST['nombre_carne']; 
$precio_carne= $_POST['precio_carne'];
$cantidad_carne= $_POST['cantidad_carne']; 

$imagen_carne=addslashes(file_get_contents($_FILES['imagen_carne']['tmp_name']));

$query = "UPDATE carnes SET nombre_carne='$nombre_carne',precio_carne='$precio_carne',
cantidad_carne='$cantidad_carne',imagen_carne='$imagen_carne' 
WHERE idcarne='$idcarne'";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_carne.php");
}else{
 echo "Error en modificar";
}

?>