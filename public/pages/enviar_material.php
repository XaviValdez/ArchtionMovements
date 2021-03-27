<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>

<link rel="stylesheet" type="text/css" href="../css/enviar_material.css">

<!-- ----------- BANNER ----------------- -->
<div class="container text-center mt-3 disapear">
	<img src="../img/enviar_material/quequiereshacer.png" class="banner" style="opacity: 0.85;">
</div>

<!-- ----------- COLOR CARDS ----------------- -->
<div class="container mt-4 mb-5 p-3">
	<div class="row justify content center p-3">
	<?php 
	if(!isset($_SESSION['user_id'])) { // Not logged
		echo '<div class="col-12 bg-light">
		<div class="row">
			<h3 class="mt-4 mb-3">Compartir tus propuestas</h3>
		</div>
		<div class="row text-center mb-5">
			<div class="m-3 bg-green p-3 text-white cut hover_animation block" style="cursor: pointer;" data-toggle="modal" data-target="#ModalLogin">
				<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/1.png"></p>

				<h4><b>Compartir Proyectos y Obras</b></h4>
			</div>

			<div class="m-3 bg-blue p-3 text-white cut hover_animation block" style="cursor: pointer;" data-toggle="modal" data-target="#ModalLogin">
				<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/2.png"></p>

				<h4><b>Subir Perfil para Red Social</b></h4>
			</div>

			<div class="m-3 bg-orange p-3 text-white cut hover_animation block" style="cursor: pointer;" data-toggle="modal" data-target="#ModalLogin">
				<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/3.png"></p>

				<h4 class="mt-3"><b>Compartir Investigación</b></h4>
			</div>
		</div>
	</div>';
	}
	else {
		echo '<div class="col-12 bg-light">
		<div class="row">
			<h3 class="mt-4 mb-3">Compartir tus propuestas</h3>
		</div>
		<div class="row text-center mb-5">
			<div class="m-3 bg-green p-3 text-white cut hover_animation block" style="cursor: pointer;" onclick="location.href='."'enviar_proyecto'".';">
				<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/1.png"></p>

				<h4><b>Compartir Proyectos y Obras</b></h4>
			</div>

			<div class="m-3 bg-blue p-3 text-white cut hover_animation block" style="cursor: pointer;" onclick="location.href='."'red_trabajo'".';">
				<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/2.png"></p>

				<h4><b>Subir Perfil para Red Social</b></h4>
			</div>

			<div class="m-3 bg-orange p-3 text-white cut hover_animation block" style="cursor: pointer;" onclick="location.href='."'enviar_investigacion'".';">
				<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/3.png"></p>

				<h4 class="mt-3"><b>Compartir Investigación</b></h4>
			</div>
		</div>
	</div>';

	}
	
	?>
		<div class="col-12 bg-light">
			<div class="row">
				<h3 class="mt-4 mb-3">Convocatorias y eventos</h3>
			</div>
			<div class="row text-center mb-5">
				<div class="m-3 bg-red p-3 text-white cut hover_animation block" style="cursor: pointer;" onclick="location.href='eventos';">
					<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/4.png"></p>

					<h4><b>Inscripción a<br> Eventos</b></h4><br>
				</div>

				<div class="m-3 bg-pink p-3 text-white cut hover_animation block" style="cursor: pointer;" onclick="location.href='tienda';">
					<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/5.png"></p>

					<h4><b>Comprar en<br> Tienda</b></h4><br>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.html') ?>