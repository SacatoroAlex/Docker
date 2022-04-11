<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">COMENTARIOS DE CLIENTES</h1>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>NOMBRE</th>
							<th>CORREO</th>
							<th>COMENTARIO</th>
							<?php if ($_SESSION['rol'] == 1) { ?>
							<th>ACCIONES</th>
							<?php } ?>
						</tr>
					</thead>
					<tbody>
						<?php
						include "../conexion.php";
						
						$query = "SELECT * FROM mensajes ";
						$resultado= $conexion->query($query);
						while($row = $resultado->fetch_assoc()){
						?>
						<tr>
							<td> <?php echo $row['idmensaje']?> </td>
							<td> <?php echo $row['nombre_mensaje']?> </td>
							<td> <?php echo $row['email_mensaje']?> </td>
							<td> <?php echo $row['mensaje']?> </td>
                            <td>
								<form action="eliminar_comentario.php?id=<?php echo $row['idmensaje']; ?>" method="post" class="confirmar d-inline">
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