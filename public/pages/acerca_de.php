<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>
<?php 
	require_once("../assets/config/config.php");
	require_once("../assets/functions/functions.php");

	$data = getAcercaDe();
?>

<link rel="stylesheet" type="text/css" href="../css/table.css">

<div class="container mt-3">
	<div class="row">
		<div class="col-sm-5 mt-5">
			<h1 class="mt-5 mr-5"><b><?php echo $data["title"]; ?></b></h1>
			<br>
			<p class="lead mt-3 mr-5"><?php echo $data["subtitle1"]; ?></p>
		</div>
		<div class="col-sm-7 pl-5"><img src="../img/acerca_de/acercade.png" class="big_img disapear"></div>
	</div>

	<div class="row mt-0 mb-5">
		<div class="col-sm-5 mt-0">
			<img class="img-fluid disapear" src="../img/acerca_de/acercade2.png">
		</div>
		<div class="col-sm-7 pl-5 mt-5">
			<br>
			<p class="lead mt-3 mr-5"><?php echo $data["subtitle2"]; ?></p>
			<p class="lead mt-3 mr-5 text-green font">¡Gracias por tu preferencia! Esperamos que encuentres valiosa la recopilación de información compartida en este sitio web.</p>
		</div>
		
	</div>
</div>
<br><br><br>


<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.php') ?>