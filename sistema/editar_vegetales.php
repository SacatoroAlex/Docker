<?php
include_once "includes/header.php";
include "../conexion.php";
?>
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <a href="lista_vegetales.php" class="btn btn-primary">Regresar</a>
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

            $idvegetales = $_REQUEST['id'];

			$query = "SELECT * FROM vegetales WHERE idvegetales = '$idvegetales'";
			$resultado= $conexion->query($query);
			$data = $resultado->fetch_assoc();
		?>
    <form action="proceso_edit_vegetales.php?id=<?php echo $data['idvegetales']; ?>" method="POST" enctype="multipart/form-data" >
      <div class="form-group">
        <label for="nombre_vegetales">Nombre de vegetales</label>
        <input type="text" placeholder="Ingrese nombre de los vegetales " name="nombre_vegetales" value="<?php echo $data ['nombre_vegetales']; ?>"class="form-control">
      </div>
      <div class="form-group">
        <label for="precio_vegetales">Precio</label>
        <input type="text" placeholder="Ingrese los vegetales" class="form-control" name="precio_vegetales" value="<?php echo $data ['precio_vegetales']; ?>">
      </div>
      <div class="form-group">
        <label for="cantidad_vegetales">Cantidad</label>
        <input type="number" placeholder="Ingrese la cantidad" class="form-control" name="cantidad_vegetales" value="<?php echo $data ['cantidad_vegetales']; ?>">
      </div>
      <div class="form-group">
      <label for="imagen_vegetales">Imagen</label>
        <img height="100px" src="data: image/jpg;base64,<?php echo base64_encode($data['imagen_vegetales']) ?>"/>
        <br>
        <br>
        <input type="file" require name="imagen_vegetales"/>
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