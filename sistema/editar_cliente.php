<?php
include_once "includes/header.php";
include "../conexion.php";
?>
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <a href="lista_cliente.php" class="btn btn-primary">Regresar</a>
</div>

<!-- Content Row -->
<div class="container-fluid">
<div class="row">
  <div class="col-lg-6 m-auto">
  <div class="card">
  <div class="card-header bg-primary text-white">
          Modificar producto
  </div>
  <div class="card-body">

        <?php
			include "../conexion.php";

            $id = $_REQUEST['id'];

			$query = "SELECT * FROM users WHERE id = '$id'";
			$resultado= $conexion->query($query);
			$cliente = $resultado->fetch_assoc();
		?>
    <form action="proceso_edit_cliente.php?id=<?php echo $cliente['id']; ?>" method="POST" enctype="multipart/form-data" >
      <div class="form-group">
        <label for="first_name">Nombre</label>
        <input type="text" placeholder="Ingrese su nombre " name="first_name" value="<?php echo $cliente ['first_name']; ?>"class="form-control">
      </div>
      <div class="form-group">
        <label for="last_name">Apellido</label>
        <input type="text" placeholder="Ingrese su apellido" name="last_name" value="<?php echo $cliente ['last_name']; ?>"class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Correo electronico</label>
        <input type="text" placeholder="Ingrese su correo electronico..!" class="form-control" name="email" value="<?php echo $cliente ['email']; ?>">
      </div>
      <div class="form-group">
        <label for="phone">Telefono</label>
        <input type="number" placeholder="Ingrese cantidad" class="form-control" name="phone" value="<?php echo $cliente ['phone']; ?>">
      </div>
      <input type="submit" value="Modificar" class="btn btn-primary">
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include_once "includes/footer.php"; ?>