<?php
include_once "includes/header.php";
include "../conexion.php";
?>
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Agregar Granos</h1>
  <a href="lista_granos.php" class="btn btn-primary">Regresar</a>
</div>

<!-- Content Row -->
<div class="row">
  <div class="col-lg-6 m-auto">
    <form action="insertar_grano.php"  enctype="multipart/form-data" method="POST" >
      <div class="form-group">
        <label for="nombre_grano">Nombre Granos</label>
        <input type="text" placeholder="Ingrese nombre de los granos" name="nombre_grano" class="form-control">
      </div>
      <div class="form-group">
        <label for="precio_grano">Precios</label>
        <input type="text" placeholder="Ingrese el precio" class="form-control" name="precio_grano" >
      </div>
      <div class="form-group">
        <label for="libra_grano">Libras</label>
        <input type="text" placeholder="Cuantas libras desea?" class="form-control" name="libra_grano" >
      </div>
        <div class="form-group">
      <label for="imagen_grano">Imagen</label>
        <input type="file" name="imagen_grano"/>
      </div>
      <input type="submit" value="Guardar Granos" class="btn btn-primary">
    </form>
  </div>
</div>

</div>
</div>
<?php include_once "includes/footer.php"; ?>