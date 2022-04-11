<?php
include "../conexion.php";


$first_name= $_POST['first_name']; 
$last_name= $_POST['last_name'];
$email= $_POST['email']; 
$phone= $_POST['phone']; 

$query="INSERT INTO users (first_name,last_name,email,phone) VALUES ('$first_name','$last_name','$email','$phone')";
$resultado = $conexion->query($query);

if($resultado){
  header("Location: registro_cliente.php");
}else{
 echo"Error no se inserto al cliente";
}

?>