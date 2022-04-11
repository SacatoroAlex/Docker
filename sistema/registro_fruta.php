<?php
include_once "includes/header.php";
include "../conexion.php";
?>
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Agregar Frutas</h1>
  <a href="lista_frutas.php" class="btn btn-primary">Regresar</a>
</div>

<!-- Content Row -->
<div class="row">
  <div class="col-lg-6 m-auto">
    <form action="insertar_fruta.php"  enctype="multipart/form-data" method="POST" >
      <div class="form-group">
        <label for="nombre_fruta">Nombre Frutas</label>
        <input type="text" placeholder="Ingrese nombre de fruta" name="nombre_fruta" class="form-control">
      </div>
      <div class="form-group">
        <label for="precio_fruta">Precio</label>
        <input type="text" placeholder="Ingrese precio" class="form-control" name="precio_fruta" >
      </div>
      <div class="form-group">
        <label for="cantidad_fruta">Cantidad</label>
        <input type="number" placeholder="Ingrese cantidad" class="form-control" name="cantidad_fruta" >
      </div>
      <div class="form-group">
      <label for="imagen_fruta">Imagen</label>
        <input type="file" name="imagen_fruta"/>
      </div>
      <input type="submit" value="Guardar Producto" class="btn btn-primary">
    </form>
  </div>
</div>

</div>
</div>
<?php include_once "includes/footer.php"; ?>