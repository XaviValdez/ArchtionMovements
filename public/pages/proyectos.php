<?php include('../templates/_header.html') ?>
<?php include('../templates/_navbar.html') ?>

<div class="container mt-4">

	<!-- MENU -->
	<div class="row mt-4 mb-4">
		<div class="col-md-4 mt-2 adjust-text-center">
			<h2 class="display-5 font-weight-bold">BUSCAR</h2>
		</div>

		<div class="col-md-3 bg-light">
			<div class="bg-light">
				<div class="dropdown">
					<a class="btn btn-lg btn-block text-center btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Categoría
					</a>
					
					<div class="dropdown-menu text-center w-100" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#">Uno</a>
						<a class="dropdown-item" href="#">Dos</a>
						<a class="dropdown-item" href="#">Tres</a>
					</div>
					</div>
			</div>
		</div>

		<div class="col-md-3 bg-light">
			<div class="bg-light">
				<div class="bg-light">
					<div class="dropdown">
						<a class="btn btn-lg btn-block text-center btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Categoría
						</a>
						
						<div class="dropdown-menu text-center w-100" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#">Uno</a>
							<a class="dropdown-item" href="#">Dos</a>
							<a class="dropdown-item" href="#">Tres</a>
						</div>
						</div>
				</div>
			</div>
		</div>

		<div class="col-md-3 ">
			<div class="bg-dark">
			</div>
		</div>
	</div>
	<!-- CARDS -->
	<div class="row">
		<div class="col-md-4 pr-1">
			<div class="card mb-4 box-shadow hover_img">
				<a href="publicacion.php">
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

<script src="../js/modernizr.custom.js"></script>
<script src="../js/masonry.pkgd.min.js"></script>
<script src="../js/imagesloaded.js"></script>
<script src="../js/classie.js"></script>
<script src="../js/AnimOnScroll.js"></script>
<script>
	new AnimOnScroll( document.getElementById( 'grid' ), {
		minDuration : 0.4,
		maxDuration : 0.7,
		viewportFactor : 0.2
	} );
</script>

<?php include('../templates/_footer.html') ?>