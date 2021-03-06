<?php include('../templates/_header.html') ?>
<?php include('../templates/_navbar.html') ?>

<link rel="stylesheet" type="text/css" href="../css/enviar_material.css">

<!-- ----------- BANNER ----------------- -->
<div class="container text-center mt-3 disapear">
	<img src="../img/enviar_material/quequiereshacer.png" class="banner" style="opacity: 0.85;">
</div>

<!-- ----------- COLOR CARDS ----------------- -->
<div class="container mt-4 mb-5 p-3">
	<div class="row justify content center p-3">
		<div class="col-7 bg-light">
			<div class="row">
				<h2 class="mt-4 mb-3">Compartir tus propuestas</h2>
			</div>
			<div class="row text-center mb-5">
				<div class="col-sm-3 m-3 bg-green p-3 text-white cut hover_animation" style="cursor: pointer;" onclick="location.href='enviar_proyecto';">
					<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/1.png"></p>
					<br>
					<h4 class="mt-3"><b>Compartir Proyectos y Obras</b></h4>
				</div>

				<div class="col-sm-3 m-3 bg-blue p-3 text-white cut hover_animation" style="cursor: pointer;" onclick="location.href='enviar_investigacion';">
					<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/2.png"></p>
					<br>
					<h4 class="mt-3"><b>Subir perfil para red social</b></h4>
				</div>

				<div class="col-sm-3 m-3 bg-orange p-3 text-white cut hover_animation" style="cursor: pointer;" onclick="location.href='red_trabajo';">
					<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/3.png"></p>
					<br>
					<h4 class="mt-3"><b>Compartir Investigación</b></h4>
				</div>
			</div>
		</div>

		<div class="col-5 bg-light">
			<div class="row">
				<h2 class="mt-4 mb-3">Convocatorias y eventos</h2>
			</div>
			<div class="row text-center mb-5">
				<div class="col-sm-4 m-3 bg-red p-3 text-white cut hover_animation" style="cursor: pointer;" onclick="location.href='{{ route('enviarProyecto')}}';">
					<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/4.png"></p>
					<br>
					<h4 class="mt-3"><b>Inscripción a<br> Eventos</b></h4><br>
				</div>

				<div class="col-sm-4 m-3 bg-pink p-3 text-white cut hover_animation" style="cursor: pointer;" onclick="location.href='enviar_investigacion';">
					<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../img/icons/5.png"></p>
					<br>
					<h4 class="mt-3"><b>Comprar en<br> tienda</b></h4><br>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('../templates/_loginmodal.html') ?>
<?php include('../templates/_footer.html') ?>