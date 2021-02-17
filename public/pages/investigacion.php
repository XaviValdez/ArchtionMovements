<?php include('../templates/_header.html') ?>
<?php include('../templates/_navbar.html') ?>

<link rel="stylesheet" type="text/css" href="../css/investigacion.css">

<div class="container text-center mt-3">
	<img src="../images/investigacion/investigacionbanner.png" class="banner">
</div>

<div class="container mt-3">
	<div class="row mt-3 mb-4">
		<div class="col-sm-3 mt-2">
			<form>
			<!-- <input type="text" id="lname" name="lname" placeholder="Buscar en Archtion Movements"> -->
			<input class="form-control form-control-lg" type="text" placeholder="Buscar en AM">
			</form>
		</div>

		<div class="col-sm-3 mt-2">
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

		<div class="col-sm-3 mt-2">
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

		<div class="col-sm-3 mt-2">
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

	</div>

	<div class="row">
		<div class="col-sm-4">
			<div class="bg-light p-4">
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
					<h5>otros</h5>
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
		<div class="col-sm-8 bg-light p-3">

			<div class="card flex-row flex-wrap mb-3">
				<div class="card-header border-0">
				<img src="//placehold.it/200" alt="">

				</div>
				<div class="card-block p-5">
					<div class="row">
						<div class="col-sm-11">
							<h4 class="card-title">Nombre del artículo Nombre del artículo</h4>
							<p class="card-text"><b> Nombre Apellido</b><br></p>
							<p class="card-text text-muted"><b> Enero 2021</b><br></p>
						</div>
						<div class="col-sm-1">
							<a href="#" class="btn btn-dark">Leer</a>
						</div>
						
					</div>
					
				</div>
				

				
			</div>


			<div class="card flex-row flex-wrap mb-3">
				<div class="card-header border-0">
				<img src="//placehold.it/200" alt="">

				</div>
				<div class="card-block p-5">
					<div class="row">
						<div class="col-sm-11">
							<h4 class="card-title">Nombre del artículo Nombre del artículo</h4>
							<p class="card-text"><b> Nombre Apellido</b><br></p>
							<p class="card-text text-muted"><b> Enero 2021</b><br></p>
						</div>
						<div class="col-sm-1">
							<a href="#" class="btn btn-dark">Leer</a>
						</div>
						
					</div>
					
				</div>
				

				
			</div>

			<div class="card flex-row flex-wrap mb-3">
				<div class="card-header border-0">
				<img src="//placehold.it/200" alt="">

				</div>
				<div class="card-block p-5">
					<div class="row">
						<div class="col-sm-11">
							<h4 class="card-title">Nombre del artículo Nombre del artículo</h4>
							<p class="card-text"><b> Nombre Apellido</b><br></p>
							<p class="card-text text-muted"><b> Enero 2021</b><br></p>
						</div>
						<div class="col-sm-1">
							<a href="#" class="btn btn-dark">Leer</a>
						</div>
						
					</div>
					
				</div>
				

				
			</div>

		</div>

	</div>
</div>

<?php include('../templates/_footer.html') ?>