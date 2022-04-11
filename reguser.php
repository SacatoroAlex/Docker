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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="public/css/estiloperfil.css">

    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

	<div class="container">
        <?php
			if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
				include 'user.php';
				$user = new User();
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
		?>
        
        <form  class="form-box1">
        <img src='public/img/perfilusuario.png' class='imgRedonda'/>
		<h2 class="">Bienvenid@ <?php echo $userData['first_name']; ?>!</h2>
        <div class="">
			<div class="">
                <ul>
                   <li><i class="icono fas fa-map-signs"></i>Nombre:<?php echo $userData['first_name'] ?></li> 
                   <li><i class="icono fas fa-map-signs"></i>Apellido:<?php echo $userData['last_name'] ?></li> 
                   <li><i class="icono fas fa-briefcase"></i>Correo:<?php echo $userData['email'] ?></li> 
                   <li><i class="icono fas fa-phone-alt"></i>Telefono:<?php echo $userData['phone'] ?></li> 
                </ul>
             </div>
        </div>
        
       <a href="userAccount.php?logoutSubmit=1" class="est"> Cerrar sesión</a>
       <a href="index.php?logoutSubmit=1" class="est"> Ir Menu</a>
       </form>
        <?php }else{ ?>
       
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
			<form action="userAccount.php" method="post"class="form-box animated fadeInUp">
             <h1 class="form-title">Iniciar sesión</h1>
                <input type="text" placeholder="Correo Electrónico"  name="email" required autofocus>
                <input type="password" placeholder="Contraseña"  name="password" required>
                <button type="submit" name="loginSubmit" value="Ingresar">
                    Iniciar sesión
                </button>
              
				<br><br><a href="forgotPassword.php">¿Olvidaste tu Contraseña?</a>
			
            <div class="form-title"><p class="form-title">No tienes una cuenta</p></div>
            <div class=""><a style="text-decoration:none" class="pt" href="registration.php"><p class="form-title">Registrate</p></a></div>
            <div class=""><a  style="text-decoration:none" class ="pt" href="index.php"><p class="form-title">Ir Menu</p></div>
        </form>
        <?php } ?>
	</div>
</body>
</html>