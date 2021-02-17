<?php include('../templates/_header.html') ?>
<?php include('../templates/_navbar.html') ?>

<link rel="stylesheet" type="text/css" href="../css/enviar_material.css">

<main class="container mb-5">
	<div class="row mt-5">
		<div class="col-md-4 bg-light pl-5 pt-5 cut">
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
	
		<div class="col-md-8">
			<div class="row">
				<div class="col-sm-4 pl-5">
					<br>
					<br>
					<h1 class="display-4">01</h1>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col-sm-4 pl-5">
					<br>
					<br>
					<h1 class="display-4">02</h1>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>

				</div>
				<div class="col-sm-4 pl-5">
					<br>
					<br>
					<h1 class="display-4">03</h1>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>

				</div>
			</div>
			
		</div>
	
	
	
	</div><!-- /.row -->
	
</main><!-- /.container -->

<?php include('../templates/_footer.html') ?>