<?php
include_once "includes/header.php";
include "../conexion.php";
?>
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Agregar Frutas</h1>
  <a href="lista_carne.php" class="btn btn-primary">Regresar</a>
</div>

<!-- Content Row -->
<div class="row">
  <div class="col-lg-6 m-auto">
    <form action="insertar_carne.php"  enctype="multipart/form-data" method="POST" >
      <div class="form-group">
        <label for="nombre_carne">Nombre Carne</label>
        <input type="text" placeholder="Ingrese nombre de fruta" name="nombre_carne" class="form-control">
      </div>
      <div class="form-group">
        <label for="precio_carne">Precio</label>
        <input type="text" placeholder="Ingrese precio" class="form-control" name="precio_carne" >
      </div>
      <div class="form-group">
        <label for="cantidad_carne">Cantidad</label>
        <input type="number" placeholder="Ingrese cantidad" class="form-control" name="cantidad_carne" >
      </div>
      <div class="form-group">
      <label for="imagen_carne">Imagen</label>
        <input type="file" name="imagen_carne"/>
      </div>
      <input type="submit" value="Guardar Producto" class="btn btn-primary">
    </form>
  </div>
</div>

</div>
</div>
<?php include_once "includes/footer.php"; ?>