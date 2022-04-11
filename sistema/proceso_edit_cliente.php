<?php
include "../conexion.php";

$id = $_REQUEST['id'];

$first_name= $_POST['first_name']; 
$last_name= $_POST['last_name'];
$email= $_POST['email']; 
$phone= $_POST['phone']; 

$query = "UPDATE users SET first_name='$first_name',last_name='$last_name',
email='$email',phone='$phone' 
WHERE id='$id'";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_cliente.php");
}else{
 echo "Error en modificar";
}

?>