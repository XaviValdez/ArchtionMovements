<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>

<?php 
require_once("../assets/config/config.php");
require_once("../assets/functions/functions.php");

$eventos = getEventos(1);
?>

<link rel="stylesheet" type="text/css" href="../css/eventos.css">

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
			<?php 
				$count = 0;
				foreach ($eventos as &$evento) {
					if($count == 0) {
						echo '<div class="row mb-4">';
					}
					if($count < 3){
						$count = $count + 1;

						$color = "";
						switch (rand(0,3)) {
							case 0:
								$color = "blue";
								break;
							case 1:
								$color = "green";
								break;
							case 2:
								$color = "orange";
								break;
							case 3:
								$color = "pink";
								break;
						}

						echo '
						<div class="col-md-6">
							<div class="card">
							<br><br>
							<img class="circled-img-center" src="../img/eventos/w'.$color.'_am.png">
							<div class="card-body text-center mt-3">
								<br>
								<p class="card-text mt-5"><b>'.$evento["name"].'</b></p>
								<p class="card-text text-muted">'.substr($evento["date"], 0, -8).'<br>'.substr($evento["date"], 10, 12).'</p>
								<div class="row justify-content-center">
									<div class="col-6">
										<a href="evento_individual?id='.$evento["id"].'" class="btn btn-block btn-outline-dark" role="button">Ver</a>
									</div>
								</div>
							</div>
							</div>
						</div>
						';
					}
					if($count == 2) {
						$count = 0;
						echo '</div>';
					}
				}
				if($count == 1) {
					echo '</div>';
				}
			?>
		</div>
		<div class="col-md-4">
			<img class="img-fluid" src="../img/eventos/convocatoria.jpg">
		</div>
	</div>
</div>

<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.html') ?>