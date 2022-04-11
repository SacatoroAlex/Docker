<?php
include_once "includes/header.php";
include "../conexion.php";
?>
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Agregar Cliente</h1>
  <a href="lista_cliente.php" class="btn btn-primary">Regresar</a>
</div>

<!-- Content Row -->
<div class="row">
  <div class="col-lg-6 m-auto">
    <form action="insertar_cliente.php"  enctype="multipart/form-data" method="POST" >
      <div class="form-group">
        <label for="first_name">Nombre</label>
        <input type="text" placeholder="Ingrese su nombre" name="first_name" class="form-control">
      </div>
      <div class="form-group">
        <label for="last_name">Apellido</label>
        <input type="text" placeholder="Ingrese su apellido" name="last_name" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Correo electronico</label>
        <input type="text" placeholder="Ingrese su correo" class="form-control" name="email" >
      </div>
      <div class="form-group">
        <label for="phone">Telefono</label>
        <input type="number" placeholder="Ingrese numero de su telefono" class="form-control" name="phone" >
      </div>
      <input type="submit" value="Guardar Producto" class="btn btn-primary">
    </form>
  </div>
</div>

</div>
</div>
<?php include_once "includes/footer.php"; ?>