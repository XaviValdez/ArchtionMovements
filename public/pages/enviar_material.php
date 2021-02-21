<?php include('../templates/_header.html') ?>
<?php include('../templates/_navbar.html') ?>

<link rel="stylesheet" type="text/css" href="../css/enviar_material.css">

<!-- ----------- BANNER ----------------- -->
<div class="container text-center mt-3">
	<img src="../images/enviar_material/quequiereshacer.png" class="banner">
</div>

<!-- ----------- COLOR CARDS ----------------- -->
<div class="container mt-3 mb-5">
	<div class="row text-center mb-5">
		
		<div class="col-sm-2 m-3 bg-green p-3 text-white cut hover_animation" style="cursor: pointer;" onclick="location.href='enviar_proyecto';">
			<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../images/icons/1.png"></p>
			<br>
			<h4 class="mt-3"><b>Compartir Proyectos y Obras</b></h4>
		</div>

		<div class="col-sm-2 m-3 bg-blue p-3 text-white cut hover_animation" style="cursor: pointer;" onclick="location.href='enviar_investigacion';">
			<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../images/icons/2.png"></p>
			<br>
			<h4 class="mt-3"><b>Compartir Investigación</b></h4>
		</div>

		<div class="col-sm-2 m-3 bg-orange p-3 text-white cut hover_animation" style="cursor: pointer;" onclick="location.href='red_trabajo';">
			<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../images/icons/3.png"></p>
			<br>
			<h4 class="mt-3"><b>Inscripción a Red de trabajo</b></h4>
		</div>

		<div class="col-sm-2 m-3 bg-red p-3 text-white cut hover_animation" style="cursor: pointer;" onclick="location.href='eventos';">
			<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../images/icons/4.png"></p>
			<br>
			<h4 class="mt-3"><b>Inscripción a Eventos</b></h4>
		</div>

		<div class="col-sm-2 m-3 bg-pink p-3 text-white cut hover_animation" style="cursor: pointer;" onclick="location.href='tienda';">
			<p class="text-center"><img class="img-fluid mt-5 local_icon" src="../images/icons/5.png"></p>
			<br>
			<h4 class="mt-3"><b>Comprar en tienda</b></h4>
		</div>

	</div>
	
	
</div>

<?php include('../templates/_loginmodal.html') ?>
<?php include('../templates/_footer.html') ?>