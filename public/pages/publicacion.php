<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>
<?php include('../templates/_loginmodal2.php') ?>
<?php 
	require_once("../assets/config/config.php");
	require_once("../assets/functions/functions.php");

	$project = getProjects(NULL,$_GET["id"],NULL);
	$project = $project[0];

	$author = getUsername($project["u_id"]);

	$images = getImg($project["p_id"]);

?>

<link rel="stylesheet" type="text/css" href="../css/publicacion.css">

<div class="container">
	<!-- TÍTULO Y FOTO -->
	<div class="row mt-5">
		<div class="col-sm-4">
			<p class="mr-5" style="letter-spacing: 5px;"><?php echo $project["location"] ?></p>
			<h1 class="mr-5"><b><?php echo $project["name"] ?></b></h1>
		</div>

		<div class="col-sm-8">
			<img class="fill w-100" src="<?php echo '../img/uploads/' . $images[0]["url"] ?>">
		</div>
	
	</div>

	<!-- DESCRIPCIÓN -->
	<div class="row mt-5">
		<div class="col-sm-4">
			
			<h3 class="mr-5"><b>Descripción</b></h3>
		</div>

		<div class="col-sm-8">
			<p class="lead"><?php echo $project["description"] ?></p>
		</div>
	</div>

	<!-- SOCIAL AMBIENTAL Y ECONÓMICO -->
	<div class="row mt-5">

		<div class="col-sm-4 cut">
			<div class="bg-blue p-5">
				<p class="text-center"><img class="img-fluid local_icon mt-5" src="../img/icons/social.png"></p>
				<p class="text-center text-white lead" style="letter-spacing: 5px;">SOCIAL</p>
				<p class="p-4 lead"><?php echo $project["social"] ?></p>

			</div>
		</div>

		<div class="col-sm-4 cut">
			<div class="bg-green p-5">
				<p class="text-center"><img class="img-fluid local_icon mt-5" src="../img/icons/ambiental.png"></p>
				<p class="text-center text-white lead" style="letter-spacing: 5px;">AMBIENTAL</p>
				<p class="p-4 lead"><?php echo $project["environment"] ?></p>

			</div>
		</div>

		<div class="col-sm-4 cut">
			<div class="bg-orange p-5">
				<p class="text-center"><img class="img-fluid local_icon mt-5" src="../img/icons/economico.png"></p>
				<p class="text-center text-white lead" style="letter-spacing: 5px;">ECONÓMICO</p>
				<p class="p-4 lead"><?php echo $project["economy"] ?></p>
			</div>
		</div>

	</div>
	
	<?php 
		for ($i = 1; $i < count($images); $i++) {
			echo '<img class="img-fluid w-100 mt-5" src="'. '../img/uploads/' . $images[$i]["url"] .'">';
		}
	?>
	
	<h3 class="mt-5"><b>Objetivo</b></h3>
	<?php 
	//Split objetivo in half
	$middle = strrpos(substr($project["objective"], 0, floor(strlen($project["objective"]) / 2)), ' ') + 1;

	$half1 = substr($project["objective"], 0, $middle);  // "The Quick : Brown Fox "
	$half2 = substr($project["objective"], $middle);  // "Jumped Over The Lazy / Dog"

	?>
	<div class="row">
		<div class="col-6 pr-5">
			<p class="lead text-justify"><?php echo $half1 ?></p>
		</div>
		<div class="col-6 pl-5">
			<p class="lead text-justify"><?php echo $half2 ?></p>
		</div>
	</div>

	<?php 
		if(!isset($_SESSION['user_id'])) { // Not logged
			echo '<p class="text-center"><img class="img-fluid rounded-circle mt-5" src="https://via.placeholder.com/100x100"></p>
			<h3 class="text-center"><b>'. $project["name"] .'</b></h3>
			<p class="text-center lead" style="letter-spacing: 3px;">'. $author["first_name"]. " " . $author["last_name"] .'</p>
			<br> <p class="text-center"><a href="#" data-toggle="modal" data-target="#ModalLogin2" class="btn bg-pink fixed-btn-size"> Contactar </a></p>';
		}
		else {
			echo '<p class="text-center"><img class="img-fluid rounded-circle mt-5" src="https://via.placeholder.com/100x100"></p>
			<h3 class="text-center"><b>'. $project["name"] .'</b></h3>
			<p class="text-center lead" style="letter-spacing: 3px;">'. $author["first_name"]. " " . $author["last_name"] .'</p>
			<br> <p class="text-center lead">Contacto:<br>'. $author["email"] .'</p>';
		}
	?>

</div>
<br><br><br><br>
<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.php') ?>