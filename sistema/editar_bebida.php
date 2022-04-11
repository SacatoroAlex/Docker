<?php
include_once "includes/header.php";
include "../conexion.php";
?>
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <a href="lista_bebidas.php" class="btn btn-primary">Regresar</a>
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

			$query = "SELECT * FROM bebidas WHERE idbebida = '$id'";
			$resultado= $conexion->query($query);
			$data = $resultado->fetch_assoc();
		?>
    <form action="proceso_edit_bebida.php?id=<?php echo $data['idbebida']; ?>" method="POST" enctype="multipart/form-data" >
      <div class="form-group">
        <label for="bebida">Bebida</label>
        <input type="text" placeholder="Ingrese nombre del producto" name="bebida" value="<?php echo $data ['bebida']; ?>"class="form-control">
      </div>
      <div class="form-group">
        <label for="precio_bebida">Precio</label>
        <input type="text" placeholder="Ingrese precio" class="form-control" name="precio_bebida" value="<?php echo $data ['precio_bebida']; ?>">
      </div>
      <div class="form-group">
        <label for="cantidad_bebida">Cantidad</label>
        <input type="number" placeholder="Ingrese cantidad" class="form-control" name="cantidad_bebida" value="<?php echo $data ['cantidad_bebida']; ?>">
      </div>
      <div class="form-group">
        <label for="tipo_bebida">Tipo</label>
        <input type="text" placeholder="Ingrese cantidad" class="form-control" name="tipo_bebida" value="<?php echo $data ['tipo_bebida']; ?>" >
      </div>
      <div class="form-group">
      <label for="imagen_bebida">Imagen</label>
        <img height="100px" src="data: image/jpg;base64,<?php echo base64_encode($data['imagen_bebida']) ?>"/>
        <br>
        <br>
        <input type="file" require name="imagen_bebida"/>
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