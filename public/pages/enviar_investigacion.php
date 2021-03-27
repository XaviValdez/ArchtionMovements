<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>

<link rel="stylesheet" type="text/css" href="../css/enviar_material.css">
<link rel="stylesheet" href="../css/drag_and_drop.css">

<main class="container mb-5">
	<div class="row mt-5">
		<div class="col-md-6 bg-light pl-5 pt-5">
			<div class="mb-3">
				<h1 class="display-5 font-weight-bold">Compartir investigación</h1>
				<form class="mr-5 mt-3" id="enviar_proyecto">
					<div class="form-group">
						<label>Título</label>
						<input type="text" class="form-control" name="title" placeholder="Título*">
					</div>

					<div class="form-group">
						<label>Ubicación</label>
						<input type="text" class="form-control" name="location" placeholder="Ubicación*">
					</div>

                    <div class="form-group">
						<label>Fecha de publicación</label><br>
						<input type="date" class="form-control" name='published_date' required=""> 
					</div>

					<div class="form-group">
						<label>Autor</label><br>
						<input type="text" class="form-control" name="autor" placeholder="Autor*">
					</div>

                    <div class="form-group">
						<label>Teléfono</label><br>
						<input type="text" class="form-control" name="tel" placeholder="Teléfono*">
					</div>

                    <div class="form-group">
						<label>Email</label><br>
						<input type="text" class="form-control" name="email" placeholder="Email*">
					</div>

                    


					
					<button type="submit" class="btn btn-dark fixed-btn-size">Enviar</button><br>
					<label class="text-center mt-3">Al registrarme acepto y estoy de acuerdo con los <a href="terminosycondiciones">términos y condiciones</a></label>

				</form>
			</div>
		</div>

		<!-- FILE UPLOAD -->
		 <div class="col-md-6">
		 	<div class="row">
			<div class="bg-light" id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
				<div id="drag_upload_file" class="p-3 text-center">
					<p>Arrastra tu archivo PDF</p>
					
					<input type="file" id="Abrir explorador" multiple>
				</div>
			</div>
			</div>
		</div>
	
	
	
	</div><!-- /.row -->
	
</main><!-- /.container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/ajaxes/send_proyecto.js"></script>

<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.html') ?>