<?php
include_once "includes/header.php";
include "../conexion.php";
?>
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <a href="lista_grano.php" class="btn btn-primary">Regresar</a>
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

            $idgrano = $_REQUEST['id'];

			$query = "SELECT * FROM granos WHERE idgrano = '$idgrano'";
			$resultado= $conexion->query($query);
			$data = $resultado->fetch_assoc();
		?>
    <form action="proceso_edit_grano.php?id=<?php echo $data['idgrano']; ?>" method="POST" enctype="multipart/form-data" >
      <div class="form-group">
        <label for="nombre_grano">Nombre de granos</label>
        <input type="text" placeholder="Ingrese nombre del producto" name="nombre_grano" value="<?php echo $data ['nombre_grano']; ?>"class="form-control">
      </div>
      <div class="form-group">
        <label for="precio_grano">Precio</label>
        <input type="text" placeholder="Ingrese grano" class="form-control" name="precio_grano" value="<?php echo $data ['precio_grano']; ?>">
      </div>
      <div class="form-group">
        <label for="libra_grano">Libras</label>
        <input type="number" placeholder="Ingrese los granos" class="form-control" name="libra_grano" value="<?php echo $data ['libra_grano']; ?>">
      </div>
      <div class="form-group">
      <label for="imagen_grano">Imagen</label>
        <img height="100px" src="data: image/jpg;base64,<?php echo base64_encode($data['imagen_grano']) ?>"/>
        <br>
        <br>
        <input type="file" require name="imagen_grano"/>
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