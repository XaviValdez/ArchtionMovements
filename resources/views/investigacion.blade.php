@extends('template')

@section('body')

<link rel="stylesheet" type="text/css" href="../css/investigacion.css">

<div class="container text-center mt-3">
	<img src="{{asset('img/investigacion/investigacionbanner.png')}}" class="banner">
</div>

<div class="container mt-3">
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
		<div class="col-sm-8 bg-light pl-5 pr-5">
			<div class="row p-4 bg-white my-rounded mt-4">
				<div class="col-sm-3">
					<img class="img-fluid" src="//placehold.it/300x400">
				</div>
				<div class="col-sm-6">
					<h4 class="card-title">Nombre del artículo Nombre del artículo</h4>
					<p class="card-text"><b> Nombre Apellido</b><br></p>
					<p class="card-text text-muted"><b> Enero 2021</b><br></p>
				</div>
				<div class="col-sm-3 text-center">
					<a href="#" class="btn btn-block btn-dark">Leer</a><br><br>
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
					<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-left-quote" viewBox="0 0 16 16">
					<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
					<path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
					</svg>
				</div>
			</div>

			<div class="row p-4 bg-white my-rounded mt-4">
				<div class="col-sm-3">
					<img class="img-fluid" src="//placehold.it/300x400">
				</div>
				<div class="col-sm-6">
					<h4 class="card-title">Nombre del artículo Nombre del artículo</h4>
					<p class="card-text"><b> Nombre Apellido</b><br></p>
					<p class="card-text text-muted"><b> Enero 2021</b><br></p>
				</div>
				<div class="col-sm-3 text-center">
					<a href="#" class="btn btn-block btn-dark">Leer</a><br><br>
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
					<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-left-quote" viewBox="0 0 16 16">
					<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
					<path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
					</svg>
				</div>
			</div>

			<div class="row p-4 bg-white my-rounded mt-4 mb-4">
				<div class="col-sm-3">
					<img class="img-fluid" src="//placehold.it/300x400">
				</div>
				<div class="col-sm-6">
					<h4 class="card-title">Nombre del artículo Nombre del artículo</h4>
					<p class="card-text"><b> Nombre Apellido</b><br></p>
					<p class="card-text text-muted"><b> Enero 2021</b><br></p>
				</div>
				<div class="col-sm-3 text-center">
					<a href="#" class="btn btn-block btn-dark">Leer</a><br><br>
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
					<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-left-quote" viewBox="0 0 16 16">
					<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
					<path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
					</svg>
				</div>
			</div>

		</div>
	</div>
</div>

@endsection