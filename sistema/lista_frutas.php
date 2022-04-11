<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">FRUTAS</h1>
		<a href="registro_fruta.php" class="btn btn-primary">Nuevo</a>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>NOMBRE DE FRUTAS</th>
							<th>PRECIO</th>
							<th>CANTIDAD</th>
							<th>IMAGEN</th>
							<?php if ($_SESSION['rol'] == 1) { ?>
							<th>ACCIONES</th>
							<?php } ?>
						</tr>
					</thead>
					<tbody>
						<?php
						include "../conexion.php";
						
						$query = "SELECT * FROM frutas ";
						$resultado= $conexion->query($query);
						while($row = $resultado->fetch_assoc()){
						?>
						<tr>
							<td> <?php echo $row['idfruta']?> </td>
							<td> <?php echo $row['nombre_fruta']?> </td>
							<td> <?php echo $row['precio_fruta']?> </td>
							<td> <?php echo $row['cantidad_fruta']?> </td>
							<td> <img height="70px" src="data: image/jpg;base64,<?php echo base64_encode($row['imagen_fruta']) ?>"/> </td>
									<td>
										<a href="registro_fruta.php?id=<?php echo $row['idfruta']; ?>" class="btn btn-primary"><i class='fas fa-audio-description'></i></a>

										<a href="editar_frutas.php ?id=<?php echo $row['idfruta']; ?>" class="btn btn-success"><i class='fas fa-edit'></i></a>

										<form action="eliminar_fruta.php?id=<?php echo $row['idfruta']; ?>" method="post" class="confirmar d-inline">
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