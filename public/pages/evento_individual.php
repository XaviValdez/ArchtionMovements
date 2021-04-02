<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>
<?php 
require_once("../assets/config/config.php");
require_once("../assets/functions/functions.php");

$evento = getEventos(null,$_GET["id"],null)[0];
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
?>

<link rel="stylesheet" type="text/css" href="../css/eventos.css">

<div class="container mt-3">

	<!-- CARDS -->
	<div class="row disapear">
		<div class="col-12">
		<div class="card border-0">
			<img class="card-img-top" src="../img/eventos/banner.png">
			<div class="card-img-overlay">
				<h1><b><?php echo $evento["name"]; ?></b></h1>
				<h4 class="text-white text-muted"><?php echo substr($evento["date"], 10, 12); ?></h4>
			</div>
			<img class="circled-img-big" <?php echo 'src="../img/eventos/w'.$color.'_am.png"'; ?>>
			<div class="card-body text-center mt-2">
				<div class="row">
					<div class="col-2"></div>
					<div class="col-2"> <!-- FECHA -->
						<p class="card-text">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar icon mr-1" viewBox="0 0 16 16">
						<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
						</svg>
						<b><?php echo substr(str_replace("-","/",$evento["date"]), 0, -8);?></b>
						</p>
					</div>
					<div class="col-2"> <!-- MODALIDAD -->
						<p class="card-text">
						
						
						
						<?php 
						switch ($evento["type"]) {
							case 1:
								echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop icon mr-1" viewBox="0 0 16 16">
								<path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
								</svg> <b>';
								echo "ONLINE";
								break;
							case 2:
								echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill icon mr-1" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
								<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							  	</svg> <b>';
								echo "PRESENCIAL";
								break;
						}
						?>
						</b>
						</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>

	<div class="row mt-5 mb-5">
		<div class="col-md-8">
		<br>
			<h3>
			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill icon" viewBox="0 0 16 16">
			<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			</svg>
			<b>Ponente</b>
			</h3>
			<div class="bg-light p-5 mb-3">
				<div class="row">
					<div class="col-md-2">
					<p class="text-center disapear"><img class="img-fluid rounded-circle" src="http://placehold.it/100x100"></p>
					</div>
					<div class="col-md-10">
						<h4><b><?php echo $evento["speaker_name"]; ?></b></h4>
						<h5 class="text-muted"><?php echo $evento["location"]; ?></h5>
						<br>
						<p class="lead">
						<?php echo $evento["speaker_description"]; ?>						
						</p>
					</div>
				</div>
			</div>

			<h2 class="mt-5 mb-5"><b><?php echo $evento["name"]; ?></b></h2>
			<p class="lead">
			<?php echo $evento["description"]; ?>			
			</p>
			<br>
			<?php
				$mystring = $evento["url"];
				$findme   = 'youtube';
				$pos = strpos($mystring, $findme);

				if ($pos !== false) {
					$url = str_replace("watch?v=","embed/",$evento["url"]);
					echo '
					<div class="p-0 mb-3">
						<iframe width="100%" height="545" src="'.$url.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					';
				} else {
					echo '
					<div class="p-0 mb-3">
						<h5>Link</h5>
						<p class="lead"><a class="btn bg-blue btn-lg" href="'.$evento["url"].'">'.$evento["url"].'</a></p>
					</div>
					';				
				}
			?>
			

		</div>

		<div class="col-md-4">
		<img class="img-fluid disapear" src="http://placehold.it/500x1000">
		</div>
	</div>
	<br><br><br><br><br><br>



</div>


<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.php') ?>