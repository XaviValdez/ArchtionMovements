@extends('template')

@section('body')

<link rel="stylesheet" type="text/css" href="{{ asset('css/enviar_material.css') }}">
<link rel="stylesheet" href="{{ asset('css/drag_and_drop.css') }}">

<main class="container mb-5">
	<div class="row mt-5">
		<div class="col-md-5 bg-light pl-5 pt-5">
			<div class="mb-3">
				<h1 class="display-5 font-weight-bold">Subir proyecto</h1>
				<form class="mr-5">

					<div class="form-group">
						<label for="exampleInputEmail1">Nombre</label>
						<input type="email" class="form-control" id="a" aria-describedby="emailHelp" placeholder="Nombre*">
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Email</label>
						<input type="password" class="form-control" id="a" placeholder="Email*">
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Nombre del proyecto</label>
						<input type="password" class="form-control" id="a" placeholder="Nombre del proyecto*">
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Ubicación</label>
						<input type="password" class="form-control" id="a" placeholder="Ubicación*">
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Descripción</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
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

@endsection