<?php include('../templates/_header.html') ?>
<?php include('../templates/_navbar.html') ?>
<div class="container mt-3">
	<div class="row">
		<div class="col-8 adjust-mobile">
			<h1 class="display-5 font-weight-bold">Escríbenos</h1>
			<p class="lead mr-5">
			Tu opinión es muy importante para nosotros
			</p>

			<form class="mr-5">
			<div class="form-group">
				<label for="exampleInputEmail1">Nombre</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Email</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Tu mensaje</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
			</div>
			<button type="submit" class="btn btn-dark">Enviar</button>
			</form>

			<p class="mr-5 mt-3">
				<img src="https://via.placeholder.com/1280x720" class="img-fluid">
			</p>
		</div>
		<div class="col-4 bg-orange"></div>
	</div>

	<div class="row pl-3 mb-5 mt-5">
		<div class="col-6 bg-mod1"></div>

		<div class="col-6 adjust-mobile bg-light">
			<h1 class="display-3 font-weight-bold mb-3 ml-3 pt-1">Contacto</h1>
			<ul class="no-bullets">
				<li>
					<p class="lead">
						NOMBRE@GMAIL.COM
					</p>
				</li>
				<li>
					<p class="lead">
						123 444 5678
					</p>							
				</li>
				<li>
					<p class="lead">
						@NOMBRE 
					</p>							
				</li>
			</ul>
		</div>
	</div>

</div>
	
<?php include('../templates/_footer.html') ?>