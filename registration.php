<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
</head>
<body>
<div  class="form-box animated fadeInUp">
        <div class="login-html">
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div >
			<form  action="userAccount.php" method="post">
			<h1 class="form-title">Crea tu cuenta</h1>
				<input type="text" name="first_name" placeholder="Nombre" required="" autofocus >
				<input type="text" name="last_name" placeholder="Apellido" required="">
				<input type="text" name="email" placeholder="Correo Electrónico" required="">
				<input type="text" name="phone" placeholder="Número Telefónico" required="">
				<input type="password" name="password" placeholder="Contraseña" required="">
				<input type="password" name="confirm_password" placeholder="Confirma tu Contraseña" required="">
				<button type="submit" name="signupSubmit" value="Ingresar">
                    Crear Cuenta
                </button>
			</form>
		</div>
        </div>
    </div>
</body>
</html>