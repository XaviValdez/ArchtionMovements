<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>
<?php include('../templates/_loginmodal2.php') ?>

<?php 
	require_once("../assets/config/config.php");
	require_once("../assets/functions/functions.php");

	$investigaciones=getResearch(1); // get them all
				
	$data = findResearch($_GET["id"])[0];
	$pdf_url = $data["name"];
	$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $pdf_url);
?>

<link rel="stylesheet" type="text/css" href="../css/investigacion.css">

<div class="container text-center mt-3">
	<img src="../img/investigacion/investigacionbanner.jpg" class="w-100">
</div>

<div class="container mt-4">
	<div class="row">
		<div class="col-sm-4">
			<div class="bg-light p-4">
				<?php echo '<h1>'.$data["name"].'</h1>'; ?>
				<hr>
				<?php echo '<p class="lead">'.substr($data["published_date"], 0, -8).'</p>'; ?>
				<br>
				<?php echo '<p class="lead">'.$data["author"].'</p>'; ?>

				<div class="row bg-light mt-5">
					<div class="col-2">
					<a href="registro" data-toggle="modal" data-target="#ModalLogin2" data-toggle="tooltip" title="Contactar al autor">
						<img src="../img/icons/contacto2.png" width="32px">
					</a>
					</div>

					<div class="col-2">
					<a href="registro" data-toggle="modal" data-target="#ModalLogin2" data-toggle="tooltip" title="Contactar al autor">
						<img src="../img/icons/download2.png" width="32px">
					</a>
					</div>

					<div class="col-2">
					<a href="registro" data-toggle="modal" data-target="#ModalLogin2" data-toggle="tooltip" title="Contactar al autor">
						<img src="../img/icons/cita2.png" width="32px">
					</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-8 bg-light p-5 pr-5 pb-4 mb-5 text-right">
			<?php echo "<img src='../previews/".$withoutExt.".png' width=100%>"; ?>
			<br><br>
			<?php echo "<div class='help'><img src='../previews/".$withoutExt."2.png' width=100% class='image'>"; ?>
			<br><br>
				<div class="middle">
					<div class="text">
						<?php
							if(!isset($_SESSION['user_id'])) { // Usr sin iniciar sesión
								echo '<a href="#" data-toggle="modal" data-target="#ModalLogin2"'. $data["url"] .'" class="btn bg-pink">Leer completo</a>';
							}
							else {
								echo '<a href="leer.php?id='. $data["id"] .'" class="btn bg-pink">Leer completo</a>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.php') ?>