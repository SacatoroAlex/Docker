

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="public/css/perfil.css">
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="public/img/perfil.jpg" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                <button type="button" class="boton-portada">
                    <i class="far fa-image"></i> Cambiar fondo
                </button>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">Sacatoro Alex</h3>
                <p class="texto" text-align="center">Estudiante de Instituto Superior Tecnológico Vicente León </p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i> Nombre:<?php echo $perfil['first_name'] ?></li>
                    <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
                    <li><i class="icono fas fa-briefcase"></i> Trabaja en:</li>
                    <li><i class="icono fas fa-building"></i> Cargo:</li>
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-marker-alt"></i> Ubicacion:</li>
                    <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento:</li>
                    <li><i class="icono fas fa-user-check"></i> Registro:</li>
                    <li><i class="icono fas fa-share-alt"></i> Redes sociales:</li>
                </ul>
            </div>
            <div class="redes-sociales">
                <a href="https://www.facebook.com/alex.sacatoro" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                <a href="" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                <a href="https://www.instagram.com/sacatoro49/?hl=es" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
            </div>
        </div>
    </section>

<div class="mis-redes" style="display: block;position: fixed;bottom: 1rem;left: 1rem; opacity: 0.5; z-index: 1000;">
    <p style="font-size: .75rem;">Perfil</p>
    <div>
        <a target="_blank" href="https://www.facebook.com/alex.sacatoro"><i class="fab fa-facebook-square"></i></a>
        <a target="_blank" href="https://twitter.com/ApockGraficos"><i class="fab fa-twitter"></i></a>
        <a target="_blank" href="https://www.instagram.com/sacatoro49/?hl=es"><i class="fab fa-instagram"></i></a>
        <a target="_blank" href="https://www.youtube.com/channel/UC15DkMZQ80aoW_Rqk4n2T_w"><i class="fab fa-youtube"></i></a>
    </div>
</div>
<!--====  End of tarjeta  ====-->
</body>

</html>