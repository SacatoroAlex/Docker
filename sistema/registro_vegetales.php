<?php
include_once "includes/header.php";
include "../conexion.php";
?>
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Agregar Vegetales</h1>
  <a href="lista_vegetales.php" class="btn btn-primary">Regresar</a>
</div>

<!-- Content Row -->
<div class="row">
  <div class="col-lg-6 m-auto">
    <form action="insertar_vegetales.php"  enctype="multipart/form-data" method="POST" >
      <div class="form-group">
        <label for="nombre_vegetales">Nombre Vegetales</label>
        <input type="text" placeholder="Ingrese nombre de los vegetales" name="nombre_vegetales" class="form-control">
      </div>
      <div class="form-group">
        <label for="precio_vegetales">Precios</label>
        <input type="text" placeholder="Ingrese el precio" class="form-control" name="precio_vegetales" >
      </div>
      <div class="form-group">
        <label for="cantidad_vegetales">Cantidad</label>
        <input type="text" placeholder="Ingrese la cantidad de los vegetales" class="form-control" name="cantidad_vegetales" >
      </div>
        <div class="form-group">
      <label for="imagen_vegetales">Imagen</label>
        <input type="file" name="imagen_vegetales"/>
      </div>
      <input type="submit" value="Guardar Vegetales" class="btn btn-primary">
    </form>
  </div>
</div>

</div>
</div>
<?php include_once "includes/footer.php"; ?>