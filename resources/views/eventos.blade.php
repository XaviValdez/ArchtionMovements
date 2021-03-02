@extends('template')

@section('body')

<link rel="stylesheet" type="text/css" href="{{ asset('css/eventos.css') }}">

<div class="container mt-3">

	<!-- MENU -->
	<div class="row mb-5 justify-content-center">
		<div class="col-sm-5 mt-2">
			<form>
			<input class="form-control form-control-lg" type="text" placeholder="Palabra clave">
			</form>
		</div>
		<div class="col-sm-2 mt-2">
			<a href="#" class="btn btn-lg btn-block text-center bg-white btn-border">Mostrar todo</a>
		</div>

	</div>
	<!-- CARDS -->
	<div class="row">
		<div class="p-3">
		<h3><b>Eventos que podrían interesarte</b></h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="row mb-4">
				<div class="col-md-6">
					<div class="card">
					<img class="card-img-top" src="https://via.placeholder.com/500x200">
					<img class="circled-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdDvt33vWhZe9pUL-Lt3RBIkVH6dki5iAgNw&usqp=CAU">
					<div class="card-body text-center mt-5">
						<p class="card-text"><b>Webinar: Lorem ipsum dolor</b></p>
						<p class="card-text text-muted">Mañana 12:00<br>90 asistentes</p>
						<div class="row justify-content-center">
							<div class="col-6">
								<a href="{{ route('evento_individual') }}" class="btn btn-block btn-outline-dark" role="button">Ver</a>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
					<img class="card-img-top" src="https://via.placeholder.com/500x200">
					<img class="circled-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdDvt33vWhZe9pUL-Lt3RBIkVH6dki5iAgNw&usqp=CAU">
					<div class="card-body text-center mt-5">
						<p class="card-text"><b>Webinar: Lorem ipsum dolor</b></p>
						<p class="card-text text-muted">Mañana 12:00<br>90 asistentes</p>
						<div class="row justify-content-center">
							<div class="col-6">
								<a href="#" class="btn btn-block btn-outline-dark" role="button">Ver</a>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>

			<div class="row mb-4">
				<div class="col-md-6">
					<div class="card">
					<img class="card-img-top" src="https://via.placeholder.com/500x200">
					<img class="circled-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdDvt33vWhZe9pUL-Lt3RBIkVH6dki5iAgNw&usqp=CAU">
					<div class="card-body text-center mt-5">
						<p class="card-text"><b>Webinar: Lorem ipsum dolor</b></p>
						<p class="card-text text-muted">Mañana 12:00<br>90 asistentes</p>
						<div class="row justify-content-center">
							<div class="col-6">
								<a href="#" class="btn btn-block btn-outline-dark" role="button">Ver</a>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
					<img class="card-img-top" src="https://via.placeholder.com/500x200">
					<img class="circled-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdDvt33vWhZe9pUL-Lt3RBIkVH6dki5iAgNw&usqp=CAU">
					<div class="card-body text-center mt-5">
						<p class="card-text"><b>Webinar: Lorem ipsum dolor</b></p>
						<p class="card-text text-muted">Mañana 12:00<br>90 asistentes</p>
						<div class="row justify-content-center">
							<div class="col-6">
								<a href="#" class="btn btn-block btn-outline-dark" role="button">Ver</a>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>

			<div class="row mb-4">
				<div class="col-md-6">
					<div class="card">
					<img class="card-img-top" src="https://via.placeholder.com/500x200">
					<img class="circled-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdDvt33vWhZe9pUL-Lt3RBIkVH6dki5iAgNw&usqp=CAU">
					<div class="card-body text-center mt-5">
						<p class="card-text"><b>Webinar: Lorem ipsum dolor</b></p>
						<p class="card-text text-muted">Mañana 12:00<br>90 asistentes</p>
						<div class="row justify-content-center">
							<div class="col-6">
								<a href="#" class="btn btn-block btn-outline-dark" role="button">Ver</a>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
					<img class="card-img-top" src="https://via.placeholder.com/500x200">
					<img class="circled-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdDvt33vWhZe9pUL-Lt3RBIkVH6dki5iAgNw&usqp=CAU">
					<div class="card-body text-center mt-5">
						<p class="card-text"><b>Webinar: Lorem ipsum dolor</b></p>
						<p class="card-text text-muted">Mañana 12:00<br>90 asistentes</p>
						<div class="row justify-content-center">
							<div class="col-6">
								<a href="#" class="btn btn-block btn-outline-dark" role="button">Ver</a>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>

			
		</div>
		<div class="col-md-4">
			<img class="img-fluid" src="https://via.placeholder.com/500x1000">
		</div>
	</div>
</div>

@endsection