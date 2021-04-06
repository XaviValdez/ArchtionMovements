<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>

<link rel="stylesheet" type="text/css" href="../css/enviar_material.css">
<link rel="stylesheet" href="../css/drag_and_drop.css">

<main class="container mb-5">
	<div class="row mt-5">
		
			<div class="col-6 bg-light pl-5 pt-5">
				<div class="mb-3">
					<form class="col-12" id="enviar_proyecto" enctype="multipart/form-data">
					<h1 class="font-weight-bold">Compartir proyecto</h1>
					<div class="form-group">
						<label>Nombre del proyecto</label>
						<input type="text" class="form-control" name="name" placeholder="Nombre del proyecto*">
					</div>

					<div class="form-group">
						<label>Ubicación</label>
						<input type="text" class="form-control" name="location" placeholder="Ubicación*">
					</div>

					<div class="form-group">
						<label>Descripción</label><br>
						<textarea class="form-control" name="descr" rows="6" placeholder="Descripción*"></textarea>
					</div>

					<div class="form-group">
						<label>Impacto social</label>
						<textarea class="form-control" name="social" rows="3" placeholder="Social*"></textarea>
					</div>
					
					<div class="form-group">
						<label>Impacto ambiental</label>
						<textarea class="form-control" name="ambiental" rows="3" placeholder="Ambiental*"></textarea>
					</div>

					<div class="form-group">
						<label>Impacto económico</label>
						<textarea class="form-control" name="economico" rows="3" placeholder="Económico*"></textarea>
					</div>

					<div class="form-group">
						<label>Objetivo</label>
						<textarea class="form-control" name="objectivo" rows="10" placeholder="Objetivo*"></textarea>
					</div>
					<br><br>
					<!-- FILE UPLOAD -->
					<div class="col-12">
						<div class="row">
							<div class="bg-light" id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
								<div id="drag_upload_file" class="p-3 text-center">
									<p>Selecciona las fotos de tu proyecto</p>
									<input  type="file" name="files[]" id="files" multiple required=""/>
								</div>

								<div class="row">
									<div class="min_img row p-5"></div>
									<input type="text" name="order" hidden="true">
								</div>
								
							</div>
						</div>
					</div>

					<br><br>
					
					<button type="submit" class="btn btn-dark fixed-btn-size">Enviar</button><br>
					<label class="text-center mt-3 mb-5">Al registrarme acepto y estoy de acuerdo con los <a href="terminosycondiciones">términos y condiciones</a></label>
					</form>
				</div>
			</div>
		
		<div class="col-md-6 pl-5">

			<div class="row bg-light p-5">
				<h3 class="font-weight-bold">
				Encuentra nuestras recomendaciones para enviar material 
				<a href="#" class="">aquí</a>
				</h3>
				
			</div>
	
		</div>
		
		
	
	
	
	</div><!-- /.row -->
	
</main><!-- /.container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/ajaxes/send_proyecto.js?v=<?php echo $version; ?>"></script>

<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.php') ?>