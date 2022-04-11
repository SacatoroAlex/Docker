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

<div class="form-box animated fadeInUp">
        <div class="login-html">
		<p class="form-title">Ingresa tu dirección de Correo Electrónico para resetear tu contraseña</p>
		<br>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="">
			<form action="userAccount.php" method="post">
				<input type="text" name="email" placeholder="Ingres su correo electronico ...!!" required>
				<button type="submit" name="forgotSubmit" value="Ingresar">
                    Enviar
                </button>
			</form>
		</div>
</div>
	</div>
</body>
</html>