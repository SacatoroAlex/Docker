<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">CARNES</h1>
		<a href="registro_carne.php" class="btn btn-primary">Nuevo</a>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>NOMBRE</th>
							<th>PRECIO</th>
							<th>LIBRA</th>
							<th>IMAGEN</th>
							<?php if ($_SESSION['rol'] == 1) { ?>
							<th>ACCIONES</th>
							<?php } ?>
						</tr>
					</thead>
					<tbody>
						<?php
						include "../conexion.php";
						
						$query = "SELECT * FROM carnes ";
						$resultado= $conexion->query($query);
						while($row = $resultado->fetch_assoc()){
						?>
						<tr>
							<td> <?php echo $row['idcarne']?> </td>
							<td> <?php echo $row['nombre_carne']?> </td>
							<td> <?php echo $row['precio_carne']?> </td>
							<td> <?php echo $row['cantidad_carne']?> </td>
							<td> <img height="70px" src="data: image/jpg;base64,<?php echo base64_encode($row['imagen_carne']) ?>"/> </td>
									<td>
										<a href="editar_carne.php ?id=<?php echo $row['idcarne']; ?>" class="btn btn-success"><i class='fas fa-edit'></i></a>

										<form action="eliminar_carne.php?id=<?php echo $row['idcarne']; ?>" method="post" class="confirmar d-inline">
										<button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
										</form>
									</td>
						</tr>
						<?php 
						}
						?>
						
					</tbody>

				</table>
			</div>

		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php include_once "includes/footer.php"; ?>