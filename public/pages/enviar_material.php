<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Arction Movements | Inicio</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<link rel="shortcut icon" href=""> 

		<!-- BOOTSTRAP CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../css/main.css">

		 <!--CSS GRIDS-->
		<link rel="stylesheet" type="text/css" href="../css/collage.css">

	</head>
	<body>
		<div class="header bg-light py-2">
		    <div class="container mt-2">
		        <div class="row">
		            <div class="col-6">
		                <a href="contacto.php">CONTACTO</a>
		            </div>
		            <div class="col-6 text-right">
		                <span class="mr-2"><a href="enviar_material.php">ENVIAR MATERIAL</a> </span> | <span class="ml-2"> <a href="registro.php">INICIAR SESIÓN</a></span>
		            </div>
		        </div>
					<div class="text-center">
					<img class="mt-4 logo" src="../images/logo.png">
					</div>
		    </div>
		</div>
		
		<nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light underline">
		    <div class="container">
		    	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        		</button>
		        <div class="collapse navbar-collapse justify-content-center" id="navbar1">

		        	<a class="navbar-brand" href="../pages/index.php">
				    	<img id="navbar-logo" src="../images/small_logo.png" alt="Logo">
				  	</a>

		            <ul class="navbar-nav">
		                <li class="nav-item m-3 lead active">
		                    <a class="nav-link" href="acerca_de.php">Acerca de</a>
		                </li>
		                <li class="nav-item m-3 lead active">
		                    <a class="nav-link" href="proyectos.php">Proyectos & Obras</a>
		                </li>
		                <li class="nav-item m-3 lead active">
		                    <a class="nav-link" href="#">Investigación</a>
		                </li>
		                <li class="nav-item m-3 lead active">
		                    <a class="nav-link" href="#">Red de trabajo</a>
		                </li>
		                <li class="nav-item m-3 lead active">
		                    <a class="nav-link" href="#">Eventos</a>
		                </li>
		                <li class="nav-item m-3 lead active">
		                    <a class="nav-link" href="#">Tienda</a>
		                </li>
		            </ul>
		        </div>
		    </div>
		</nav>

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

		<footer class="bg-dark text-center text-lg-start mt-3 text-white">
			<div class="text-center p-3 bg-black">
				<a href="index.php">
					<img class="mt-4 logo-footer" src="../images/dark_logo.png">
				</a>
		        <div class="container mt-5 mb-3">
				  	<div class="row">
					    <div class="col-sm">
					      	<a href="acerca_de.php">Acerca de</a>
					    </div>
					    <div class="col-sm">
					      	<a href="proyectos.php">Proyectos & obras</a>
					    </div>
					    <div class="col-sm">
					      	<a href="">Investigación</a>
					    </div>
					    <div class="col-sm">
					      	<a href="">Red de trabajo</a>
					    </div>
					    <div class="col-sm">
					    	<a href="">Eventos</a>
					    </div>
					    <div class="col-sm">
					    	<a href="">Tienda</a>
					    </div>
					    <div class="col-sm">
					    	<a href="">Contacto</a>
					    </div>
				  	</div>
				</div>
			</div>
			<div class="text-center p-3 bg-gray" style="letter-spacing: 5px;">
				<small>TODOS LOS DERECHOS RESERVADOS</small>
			</div>
		</footer>


		<!-- JQuery Popper and Bootstrap-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- NAVBAR JQUERY-->
		<script src="../js/navbar.js"></script>
	</body>
</html>