@extends('template')

@section('body')

<div class="container mt-4">

	<!-- MENU -->
	<div class="row mt-3 mb-4">
		<div class="col-sm-3 mt-2">
			<form>
			<input class="form-control form-control-lg" type="text" placeholder="Palabra clave">
			</form>
		</div>

		<div class="col-sm-3 mt-2">
			<div class="dropdown">
				<a class="btn btn-lg btn-block text-center bg-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Ubicación
				</a>
				
				<div class="dropdown-menu text-center w-100" aria-labelledby="dropdownMenuLink1">
					<a class="dropdown-item" href="#">Aguascalientes</a>
					<a class="dropdown-item" href="#">CDMX</a>
					<a class="dropdown-item" href="#">Coahuila de Zaragoza</a>
					<a class="dropdown-item" href="#">Colima</a>
					<a class="dropdown-item" href="#">Guerrero</a>
					<a class="dropdown-item" href="#">Nuevo León</a>
					<a class="dropdown-item" href="#">Oaxaca</a>
					<a class="dropdown-item" href="#">Puebla</a>
					<a class="dropdown-item" href="#">Querétaro</a>
					<a class="dropdown-item" href="#">Veracruz</a>
					<a class="dropdown-item" href="#">Yucatán</a>
					<a class="dropdown-item" href="#">Zacatecas</a>
				</div>
			</div>
		</div>

		<div class="col-sm-3 mt-2">
			<div class="dropdown">
				<a class="btn btn-lg btn-block text-center bg-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Sector
				</a>
				
				<div class="dropdown-menu text-center w-100" aria-labelledby="dropdownMenuLink2">
					<a class="dropdown-item" href="#">Salud</a>
					<a class="dropdown-item" href="#">Vivienda</a>
					<a class="dropdown-item" href="#">Monumento</a>
					<a class="dropdown-item" href="#">Oficinas</a>
					<a class="dropdown-item" href="#">Educación</a>
					<a class="dropdown-item" href="#">Otro</a>
				</div>
			</div>
		</div>

		<div class="col-sm-3 mt-2">
			<div class="dropdown">
				<a class="btn btn-lg btn-block text-center bg-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Tipo
				</a>
				
				<div class="dropdown-menu text-center w-100" aria-labelledby="dropdownMenuLink3">
					<a class="dropdown-item" href="#">Proyecto</a>
					<a class="dropdown-item" href="#">Obra</a>
				</div>
			</div>
		</div>

	</div>
	<!-- CARDS -->
	<div class="row">
		<div class="col-md-4 pr-1">
			<div class="card mb-4 box-shadow hover_img">
				<a href="{{ route('publicacion', 0) }}">
					<img class="card-img-top" src="https://via.placeholder.com/500x300" alt="Card image cap">
				</a>
				<div class="mt-3">
					<h5 class="card-title">Card title</h5>
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				</div>
			</div>
		</div>
		<div class="col-md-4 pr-1">
			<div class="card mb-4 box-shadow hover_img">
			<img class="card-img-top" src="https://via.placeholder.com/500x300" alt="Card image cap">
				<div class="mt-3">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				</div>
			</div>
		</div>
		<div class="col-md-4 pr-1">
			<div class="card mb-4 box-shadow hover_img">
			<img class="card-img-top" src="https://via.placeholder.com/500x300" alt="Card image cap">
				<div class="mt-3">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				</div>
			</div>
		</div>
		<div class="col-md-4 pr-1">
			<div class="card mb-4 box-shadow hover_img">
			<img class="card-img-top" src="https://via.placeholder.com/500x300" alt="Card image cap">
				<div class="mt-3">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				</div>
			</div>
		</div>
		<div class="col-md-4 pr-1">
			<div class="card mb-4 box-shadow hover_img">
			<img class="card-img-top" src="https://via.placeholder.com/500x300" alt="Card image cap">
				<div class="mt-3">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				</div>
			</div>
		</div>
		<div class="col-md-4 pr-1">
			<div class="card mb-4 box-shadow hover_img">
			<img class="card-img-top" src="https://via.placeholder.com/500x300" alt="Card image cap">
				<div class="mt-3">
					<h5 class="card-title">Card title</h5>
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection