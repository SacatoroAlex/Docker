<?php
include_once "includes/header.php";
include "../conexion.php";
?>
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <a href="lista_carne.php" class="btn btn-primary">Regresar</a>
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

			$query = "SELECT * FROM carnes WHERE idcarne = '$id'";
			$resultado= $conexion->query($query);
			$data = $resultado->fetch_assoc();
		?>
    <form action="proceso_edit_carne.php?id=<?php echo $data['idcarne']; ?>" method="POST" enctype="multipart/form-data" >
      <div class="form-group">
        <label for="nombre_carne">Nombre de carne</label>
        <input type="text" placeholder="Ingrese nombre del producto" name="nombre_carne" value="<?php echo $data ['nombre_carne']; ?>"class="form-control">
      </div>
      <div class="form-group">
        <label for="precio_carne">Precio</label>
        <input type="text" placeholder="Ingrese precio" class="form-control" name="precio_carne" value="<?php echo $data ['precio_carne']; ?>">
      </div>
      <div class="form-group">
        <label for="cantidad_carne">Cantidad</label>
        <input type="number" placeholder="Ingrese cantidad" class="form-control" name="cantidad_carne" value="<?php echo $data ['cantidad_carne']; ?>">
      </div>
      <div class="form-group">
      <label for="imagen_carne">Imagen</label>
        <img height="100px" src="data: image/jpg;base64,<?php echo base64_encode($data['imagen_carne']) ?>"/>
        <br>
        <br>
        <input type="file" require name="imagen_carne"/>
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