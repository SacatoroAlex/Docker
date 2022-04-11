<?php
include "conexion.php";

$nombre_mensaje= $_POST['nombre_mensaje']; 
$email_mensaje= $_POST['email_mensaje'];
$mensaje= $_POST['mensaje']; 

$query="INSERT INTO mensajes (nombre_mensaje,email_mensaje,mensaje) VALUES ('$nombre_mensaje','$email_mensaje','$mensaje')";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: index.php");
}else{
 echo"Error al enviar mensaje";
}

?>