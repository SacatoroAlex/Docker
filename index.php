<?php
$conexion=mysqli_connect('localhost','root','','sis_venta');

require 'conexionuser.php';
$db = new Database();
$con =  $db ->conectar();
$sql =$con ->prepare("SELECT codproducto,descripcion,precio,existencia FROM producto ");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
require 'bebidausercon.php';
$base = new base();
$conec =  $base ->conectar();
$sql =$conec ->prepare("SELECT idbebida,bebida,precio_bebida,cantidad_bebida,tipo_bebida,imagen_bebida FROM bebidas ");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
<?php
require 'frutacon.php';
$dbase = new fruta();
$conex =  $dbase ->conectar();
$sql =$conex ->prepare("SELECT idfruta,nombre_fruta,precio_fruta,cantidad_fruta,imagen_fruta FROM frutas ");
$sql->execute();
$resul = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
require 'carnecon.php';
$dbasee = new carne();
$conexi =  $dbasee ->conectar();
$sql =$conexi ->prepare("SELECT idcarne,nombre_carne,precio_carne,cantidad_carne,imagen_carne FROM carnes ");
$sql->execute();
$resu = $sql->fetchAll(PDO::FETCH_ASSOC);

?>


<?php
require 'granocon.php';
$dbgrano = new grano();
$conexigrano =  $dbgrano ->conectar();
$sql =$conexigrano ->prepare("SELECT idgrano,nombre_grano,precio_grano,libra_grano,imagen_grano FROM granos ");
$sql->execute();
$resugrano = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
require 'vegetalescon.php';
$dbvegetales = new vegetales();
$conexivegetales =  $dbvegetales ->conectar();
$sql =$conexivegetales ->prepare("SELECT idvegetales,nombre_vegetales,precio_vegetales,cantidad_vegetales,imagen_vegetales FROM vegetales ");
$sql->execute();
$resuvegetales = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>

    <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>MiniSuper</a>

        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">Menu</a>
            <a href="#product">Categoria</a>
            <a href="#deal">Trato</a>
            <a href="#contact">Contacto</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-heart"> </a>
            <a href="reguser.php" class="fas fa-user-circle"></a>
            <a href="admin.php" class="fa fa-lock"></a>
        </div>
    </div>
</header>



<section class="home" id="home">

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>
    <div class="content">
        <span>Calidad y Cantidad</span>
        <h3>Sus proctos de </h3>
        <a href="#" class="btn">necesidad diaria</a>
    </div>

</section>


<section class="banner-container">
   
    <div class="banner">
        <img src="images/banner-1.jpg" alt="">
        <div class="content">
        <h3>Oferta limitada</h3>
            <p>hasta 10% descuento</p>
            <a href="#" class="btn">Ordenar Pruducto</a>
        </div>
    </div>
   
    <div class="banner">
        <img src="images/banner-2.jpg" alt="">
        <div class="content">
            <h3>Oferta limitada</h3>
            <p>hasta 20% descuento</p>
            <a href="#" class="btn">Ordenar Pruducto</a>
        </div>
    </div>

</section>


<section class="product" id="product" >

    <h1 class="heading">Sección<span> Bebidas</span></h1>

    <div class="box-container">
        
    <?php foreach ($result as $data){ ?>
        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img height="180px" src="data: image/jpg;base64,<?php echo base64_encode($data['imagen_bebida']) ?>"/>
            <h3><?php echo $data['bebida'];?></h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $ <?php echo number_format($data['precio_bebida'],2,'.',',');?> </div>
            <div class="quantity">
                <span>
                    Cantidad <?php echo $data['cantidad_bebida'];?>
                </span>
            </div><!--
            <a href="" name="add_to_cart" class="btn">Añadir al carrito</a> -->
        </div>
        <?php } ?>

    </div>
    
</section>

<section class="product" id="product">

    <h1 class="heading">Sección<span> Frutas</span></h1>

    <div class="box-container">
    <?php foreach ($resul as $fruta){ ?>
        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img height="180px" src="data: image/jpg;base64,<?php echo base64_encode($fruta['imagen_fruta']) ?>"/>
            <h3><?php echo $fruta['nombre_fruta'];?></h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $ <?php echo number_format($fruta['precio_fruta'],2,'.',',');?> </div>
            <div class="quantity">
                <span>
                    Cantidad <?php echo $fruta['cantidad_fruta'];?>
                </span>
            </div><!---
            <a href="" name="add_to_cart" class="btn">Añadir al carrito</a>-->
        </div>
        <?php } ?>
    </div>
    
</section>

<section class="product" id="product">

    <h1 class="heading">Sección<span> Carnes</span></h1>

    <div class="box-container">
    <?php foreach ($resu as $carne){ ?>
        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img height="180px" src="data: image/jpg;base64,<?php echo base64_encode($carne['imagen_carne']) ?>"/>
            <h3><?php echo $carne['nombre_carne'];?></h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $ <?php echo number_format($carne['precio_carne'],2,'.',',');?> </div>
            <div class="quantity">
                <span>
                    Cantidad <?php echo $carne['cantidad_carne'];?>
                </span>
            </div><!---
            <a href="" name="add_to_cart" class="btn">Añadir al carrito</a>--->
        </div>
        <?php } ?>
    </div>
    
</section>


<section class="product" id="product">

    <h1 class="heading">Sección<span> Granos</span></h1>

    <div class="box-container">
    <?php foreach ($resugrano as $grano){ ?>
        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img height="180px" src="data: image/jpg;base64,<?php echo base64_encode($grano['imagen_grano']) ?>"/>
            <h3><?php echo $grano['nombre_grano'];?></h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $ <?php echo number_format($grano['precio_grano'],2,'.',',');?> </div>
            <div class="quantity">
                <span>
                    Libra <?php echo $grano['libra_grano'];?>
                </span>
            </div><!--
            <a href="" name="add_to_cart" class="btn">Añadir al carrito</a>-->
        </div>
        <?php } ?>
    </div>
    
</section>

<section class="product" id="product">

    <h1 class="heading">Sección<span> Vegetales</span></h1>

    <div class="box-container">
    <?php foreach ($resuvegetales as $vegetales){ ?>
        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img height="180px" src="data: image/jpg;base64,<?php echo base64_encode($vegetales['imagen_vegetales']) ?>"/>
            <h3><?php echo $vegetales['nombre_vegetales'];?></h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $ <?php echo number_format($vegetales['precio_vegetales'],2,'.',',');?> </div>
            <div class="quantity">
                <span>
                    Cantidad <?php echo $vegetales['cantidad_vegetales'];?>
                </span>
            </div><!--
            <a href="" name="add_to_cart" class="btn">Añadir al carrito</a>-->
        </div>
        <?php } ?>
    </div>
    
</section>


<section class="deal" id="deal">

    <div class="content">

        <h3 class="title">Oferta del día  </h3>
        <p></p>

        <div class="count-down">
            <div class="box">
                <h3 id="days">06</h3>
                <span>Día </span>
            </div>
            <div class="box">
                <h3 id="hour">00</h3>
                <span>hora </span>
            </div>
            <div class="box">
                <h3 id="minutes">00</h3>
                <span>minuto</span>
            </div>
            <div class="box">
                <h3 id="seconds">00</h3>
                <span>segundo</span>
            </div>
        </div>

        <a href="#" class="btn">verifique el trato</a>

    </div>

</section>


<section class="contact" id="contact">

    <h1 class="heading"> <span>contacto</span> nosotros </h1>

    <form action="insertar_mensaje.php"  enctype="multipart/form-data" method="POST">
        <div class="inputBox">
            <input type="text"  name="nombre_mensaje" placeholder="Ingrese su nombre...!!">
            <input type="email" name="email_mensaje" placeholder="Ingrese su correo ..!!">
        </div>
        <textarea placeholder="cual es tu opinion..!!" name="mensaje"  cols="30" rows="10"></textarea>
        <input type="submit" value="enviar mensaje" class="btn">
    </form>
</section>


<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>MiniSuper</a>
            <p>Esta basado en pagina ventas de productos en linea</p>
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                <a href="#" class="btn fab fa-linkedin"></a>
            </div>
        </div>
        
        <div class="box">
            <h3>Nuestra ubicación</h3>
            <div class="links">
                <a href="#">Latacunga</a>
            </div>
        </div>

        <div class="box">
            <h3>enlaces rápidos</h3>
            <div class="links">
                <a href="#">home</a>
            </div>
        </div>

        <div class="box">
            <h3>descargar aplicación</h3>
            <div class="links">
                <a href="#">google play</a>
            </div>
        </div>

    </div>

    <h3 class="credit">MiniSuper<span> Pagina web</span> todos los derechos reservados <span>Grupo de estudiantes  de 5to Desarrollo de Software</span></h3>

</section>

<script src="js/script.js"></script>
    
</body>
</html>