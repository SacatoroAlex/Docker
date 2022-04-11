<?php
include_once "includes/header.php";
include "../conexion.php";
?>
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Agregar Bebidas</h1>
  <a href="lista_bebidas.php" class="btn btn-primary">Regresar</a>
</div>

<!-- Content Row -->
<div class="row">
  <div class="col-lg-6 m-auto">
    <form action="insertar_bebida.php"  enctype="multipart/form-data" method="POST" >
      <div class="form-group">
        <label for="bebida">Bebida</label>
        <input type="text" placeholder="Ingrese nombre del producto" name="bebida" class="form-control">
      </div>
      <div class="form-group">
        <label for="precio_bebida">Precio</label>
        <input type="text" placeholder="Ingrese precio" class="form-control" name="precio_bebida" >
      </div>
      <div class="form-group">
        <label for="cantidad_bebida">Cantidad</label>
        <input type="number" placeholder="Ingrese cantidad" class="form-control" name="cantidad_bebida" >
      </div>
      <div class="form-group">
        <label for="tipo_bebida">Tipo</label>
        <input type="text" placeholder="Ingrese cantidad" class="form-control" name="tipo_bebida" >
      </div>
      <div class="form-group">
      <label for="imagen_bebida">Imagen</label>
        <input type="file" name="imagen_bebida"/>
      </div>
      <input type="submit" value="Guardar Producto" class="btn btn-primary">
    </form>
  </div>
</div>

</div>
</div>
<?php include_once "includes/footer.php"; ?>