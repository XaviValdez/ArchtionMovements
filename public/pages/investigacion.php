<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>

<?php 
	require_once("../assets/config/config.php");
	require_once("../assets/functions/functions.php");

	$investigaciones=getResearch(1); // get them all
?>


<script>
// When the user clicks on div, open the popup
function Contact(id) {
  var other = document.getElementById("cita-popup"+id);
  var popup = document.getElementById("contacto-popup"+id);
  popup.classList.toggle("show");
  other.classList.remove('show');
}

function Cita(id) {
  var other = document.getElementById("contacto-popup"+id);
  var popup = document.getElementById("cita-popup"+id);
  popup.classList.toggle("show");
  other.classList.remove('show');
}
</script>

<link rel="stylesheet" type="text/css" href="../css/investigacion.css">

<div class="container text-center">
	<img src="../img/investigacion/investigacionbanner.jpg" class="banner w-100">
	<!-- <img src="http://placehold.it/1250x250" class="banner w-100"> -->
</div>

<div class="container mt-4">
	<div class="row mt-3 mb-4">
		<div class="col-sm-4 mt-2">
			<form>
			<!-- <input type="text" id="lname" name="lname" placeholder="Buscar en Archtion Movements"> -->
			<input class="form-control form-control-lg" type="text" placeholder="Buscar en AM">
			</form>
		</div>

		<div class="col-sm-2 mt-2">
			<div class="dropdown">
				<a class="btn btn-lg btn-block text-center bg-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Autor
				</a>
				
				<div class="dropdown-menu text-center w-100" aria-labelledby="dropdownMenuLink1">
					<a class="dropdown-item" href="#">Uno</a>
					<a class="dropdown-item" href="#">Dos</a>
					<a class="dropdown-item" href="#">Tres</a>
				</div>
			</div>
		</div>

		<div class="col-sm-2 mt-2">
			<div class="dropdown">
				<a class="btn btn-lg btn-block text-center bg-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Ubicación
				</a>
				
				<div class="dropdown-menu text-center w-100" aria-labelledby="dropdownMenuLink2">
					<a class="dropdown-item" href="#">Uno</a>
					<a class="dropdown-item" href="#">Dos</a>
					<a class="dropdown-item" href="#">Tres</a>
				</div>
			</div>
		</div>

		<div class="col-sm-2 mt-2">
			<div class="dropdown">
				<a class="btn btn-lg btn-block text-center bg-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Fecha
				</a>
				
				<div class="dropdown-menu text-center w-100" aria-labelledby="dropdownMenuLink3">
					<a class="dropdown-item" href="#">Uno</a>
					<a class="dropdown-item" href="#">Dos</a>
					<a class="dropdown-item" href="#">Tres</a>
				</div>
			</div>
		</div>

		<div class="col-sm-2 mt-2">
			<a href="#" class="btn btn-lg btn-block text-center bg-white btn-border">Mostrar todo</a>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-4">
			<div class="bg-notsolight p-4">
				<h4 class="mb-3">Filtros</h4>
				
				<h5><b>Tipo de publicación</b></h5><hr>
				
				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="todos"/>
				<label class="form-check-label" for="todos">
					<h5>Todos</h5>
				</label>
				</div>

				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="articulo"/>
				<label class="form-check-label" for="articulo">
					<h5>Artículo</h5>
				</label>
				</div>

				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="libro"/>
				<label class="form-check-label" for="libro">
					<h5>Libro</h5>
				</label>
				</div>

				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="conferencia"/>
				<label class="form-check-label" for="conferencia">
					<h5>Paper de conferencia</h5>
				</label>
				</div>

				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="otros"/>
				<label class="form-check-label" for="otros">
					<h5>Otros</h5>
				</label>
				</div>

				<h5 class="mt-3"><b>Idioma</b></h5><hr>

				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="todosIdioma"/>
				<label class="form-check-label" for="todosIdioma">
					<h5>Todos</h5>
				</label>
				</div>

				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="espanol"/>
				<label class="form-check-label" for="espanol">
					<h5>Español</h5>
				</label>
				</div>

				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="ingles"/>
				<label class="form-check-label" for="ingles">
					<h5>Inglés</h5>
				</label>
				</div>

			</div>
		</div>
		<!-- HTML to write -->
		<div class="col-sm-8 bg-light pl-5 pr-5 pb-4 mb-5">
			<?php
			
			if(!isset($_SESSION['user_id'])) { // Usr sin iniciar sesión
				foreach($investigaciones as $investigacion) {
				
					echo '<div class="row p-4 bg-white my-rounded mt-4">
							<div class="col-sm-3">
								<img class="img-fluid" src="//placehold.it/300x400">
							</div>
							<div class="col-sm-6">
								<h4 class="card-title text-green"><b>'. $investigacion["name"] .'</b></h4>
								<p class="card-text mb-0 mt-4"><b>'. $investigacion["author"] .'</b><br></p>
								<p class="card-text text-muted"><b> Publicado el: '. $investigacion["published_date"] .'</b><br></p>
							</div>
							<div class="col-sm-3 text-center">
								<div class="row mb-4">
								<a href="registro" data-toggle="modal" data-target="#ModalLogin"'. $investigacion["url"] .'" class="btn btn-block btn-outline-dark">Leer</a>
								</div>
								<div class="row mb-4">
								<a href="preview.php'. "?id=" . $investigacion["r_id"] .'" class="btn btn-block btn-outline-success">Previsualizar</a>
								</div>
								<div class="row justify-content-center">
									<div class="col-3">
									<a href="registro" data-toggle="modal" data-target="#ModalLogin" data-toggle="tooltip" title="Contactar al autor">
										<img src="../img/icons/contacto2.png" width="32px">
									</a>
									</div>
									<div class="col-3">
									<a href="registro" data-toggle="modal" data-target="#ModalLogin" data-toggle="tooltip" title="Descargar">
										<img src="../img/icons/download2.png" width="32px">
									</a>
									</div>
									<div class="col-3">
									<a href="registro" data-toggle="modal" data-target="#ModalLogin" data-toggle="tooltip" title="Citar">
										<img src="../img/icons/cita2.png" width="32px">
									</a>
									</div>
								</div>
							</div>
						</div>';
				}
			}
			else {
				foreach($investigaciones as $investigacion) {
				
					echo '<div class="row p-4 bg-white my-rounded mt-4">
							<div class="col-sm-3">
								<img class="img-fluid" src="//placehold.it/300x400">
							</div>
							<div class="col-sm-6">
								<h4 class="card-title text-green">'. $investigacion["name"] .'</h4>
								<p class="card-text"><b>'. $investigacion["author"] .'</b><br></p>
								<p class="card-text text-muted"><b> Publicado el: '. substr($investigacion["published_date"], 0, -8) .'</b><br></p>
							</div>
							<div class="col-sm-3 text-center">
								<div class="row mb-4">
								<a href="leer.php?id='. $investigacion["r_id"] .'" class="btn btn-block btn-outline-dark">Leer</a>
								</div>
								<div class="row mb-4">
								<a href="preview.php'. "?id=" . $investigacion["r_id"] .'" class="btn btn-block btn-outline-success">Previsualizar</a>
								</div>
								<div class="row">
									<div class="col-4 popup">
									<a onclick="Contact('. $investigacion["r_id"] .');" data-toggle="tooltip" title="Contactar al autor">
										<img src="../img/icons/contacto.png" width="32px">
									</a>
									<span class="popuptext" id="contacto-popup'.$investigacion["r_id"].'">Contacto:<br>'.$investigacion["author_email"].'<br>'.$investigacion["author_mobile"].'</span>
									</div>
									<div class="col-4">
									<a href="../uploaded_files_research/'.$investigacion["url"].'" data-toggle="tooltip" title="Descargar" download>
										<img src="../img/icons/download.png" width="32px">
									</a>
									</div>
									<div class="col-4 popup">
									<a onclick="Cita('. $investigacion["r_id"] .');" data-toggle="tooltip" title="Citar">
										<img src="../img/icons/cita.png" width="32px">
									</a>
									<span class="popuptext2" id="cita-popup'.$investigacion["r_id"].'">'.$investigacion["author"].". (".substr($investigacion["published_date"], 0, -15)."). ".$investigacion["name"].'.</span>
									</div>
								</div>
							</div>
						</div>';
				}
			}
			
			?>
			
		</div>
	</div>
</div>

<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.php') ?>