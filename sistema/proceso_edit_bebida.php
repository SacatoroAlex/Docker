<?php
include "../conexion.php";

$idbebida = $_REQUEST['id'];

$bebida= $_POST['bebida']; 
$precio_bebida= $_POST['precio_bebida'];
$cantidad_bebida= $_POST['cantidad_bebida']; 
$tipo_bebida= $_POST['tipo_bebida']; 

$imagen_bebida=addslashes(file_get_contents($_FILES['imagen_bebida']['tmp_name']));

$query = "UPDATE bebidas SET bebida='$bebida',precio_bebida='$precio_bebida',
cantidad_bebida='$cantidad_bebida',tipo_bebida='$tipo_bebida',imagen_bebida='$imagen_bebida' 
WHERE idbebida='$idbebida'";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_bebida.php");
}else{
 echo "Error en modificar";
}

?>