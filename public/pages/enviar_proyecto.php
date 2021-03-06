<?php include('../templates/_header.html') ?>
<?php include('../templates/_navbar.html') ?>

<link rel="stylesheet" type="text/css" href="../css/enviar_material.css">
<link rel="stylesheet" href="../css/drag_and_drop.css">

<main class="container mb-5">
	<div class="row mt-5">
		<div class="col-md-5 bg-light pl-5 pt-5">
			<div class="mb-3">
				<h1 class="display-5 font-weight-bold">Compartir proyecto</h1>
				<form class="mr-5">

					<div class="form-group">
						<label>Autor</label>
						<input type="text" class="form-control" id="a" placeholder="Autor*">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" id="a" placeholder="Email*">
					</div>

					<div class="form-group">
						<label>Nombre del proyecto</label>
						<input type="text" class="form-control" id="a" placeholder="Nombre del proyecto*">
					</div>

					<div class="form-group">
						<label>Ubicación</label>
						<input type="text" class="form-control" id="a" placeholder="Ubicación*">
					</div>

					<div class="form-group">
						<label>Descripción</label>
						<textarea class="form-control" id="a" rows="3" placeholder="Mensaje"></textarea>
					</div>

				</form>

				<button class="btn btn-dark">Enviar</button>

			</div>
		</div>

		<!-- FILE UPLOAD -->
		 <div class="col-md-7"> 
			<div class="bg-light" id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
				<div id="drag_upload_file" class="p-3 text-center">
					<p>Arrastra las fotos de tu proyecto</p>
					
					<input type="file" id="Abrir explorador" multiple>
				</div>
			</div>
		</div>
	
	
	
	</div><!-- /.row -->
	
</main><!-- /.container -->

<?php include('../templates/_loginmodal.html') ?>
<?php include('../templates/_footer.html') ?>