<?php include('../templates/_header.html') ?>
<?php include('../templates/_navbar.html') ?>

<main class="container">
	<div class="p-md-5 mb-3 mt-3 bg-mod3">
		<h1 class="display-4 font-weight-bold"> </h1>
	</div>
	
	<div class="row">
		<div class="col-md-4">
		<div class="mb-3">
			<h1 class="display-5 font-weight-bold">Envía material</h1>
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
					<label for="exampleInputPassword1">Firma</label>
					<input type="password" class="form-control" id="a" placeholder="Firma*">
				</div>

				<div class="form-group">
					<label for="exampleInputPassword1">Otra cosa</label>
					<input type="password" class="form-control" id="a" placeholder="Otra cosa*">
				</div>

				<div class="form-group">
					<label for="exampleFormControlTextarea1">Tu mensaje</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
				</div>

			</form>
				<button class="btn btn-dark"> Enviar </button>
		</div>
		</div>
	
		<div class="col-md-8">
			<h1 class="display-5 font-weight-bold">Instrucciones</h1>
			
			<h1 class="display-3"> 1 </h1>
			<p class="lead">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo lacus id sapien maximus, id mollis eros luctus. 
			</p>
			<h1 class="display-3"> 2 </h1>
			<p class="lead">
				Nulla dictum maximus orci, non efficitur sem mattis vel. Sed rhoncus commodo lectus quis elementum.Donec eleifend neque nec erat aliquet vehicula. Suspendisse potenti. Proin bibendum, ante sit amet dapibus lacinia, felis eros mattis sem, congue dictum nisl nunc at ligula.
			</p>
			<h1 class="display-3"> 3 </h1>
			<p class="lead">
				Donec eleifend neque nec erat aliquet vehicula. Suspendisse potenti. Proin bibendum, ante sit amet dapibus lacinia, felis eros mattis sem, congue dictum nisl nunc at ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo lacus id sapien maximus, id mollis eros luctus. 
			</p>
			
		</div>
	
	
	
	</div><!-- /.row -->
	
</main><!-- /.container -->

<?php include('../templates/_footer.html') ?>