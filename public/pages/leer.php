<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>

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
	<img src="../img/investigacion/investigacionbanner.png" class="banner">
</div>

<div class="container mt-4">
	<div class="row">
		<div class="col-sm-4">
			<div class="bg-light p-4">
				<?php echo '<h1 class="display-4">'.$data["name"].'</h1>'; ?>
				<hr>
				<?php echo '<p class="lead">'.substr($data["published_date"], 0, -8).'</p>'; ?>
				<br>
				<?php echo '<p class="lead">'.$data["author"].'</p>'; ?>
				<div class="row mt-5">
					<div class="col-2">
					<a href="#" data-toggle="tooltip" title="Contactar al autor">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
						<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
						</svg>
					</a>
					</div>
					<div class="col-2">
					<a href="#" data-toggle="tooltip" title="Descargar">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
						</svg>
					</a>
					</div>
					<div class="col-2">
					<a href="#" data-toggle="tooltip" title="Citar">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-right-quote" viewBox="0 0 16 16">
						<path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
						<path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
						</svg>
					</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-8 bg-light p-5 pr-5 pb-4 mb-5 text-right">
			<?php
				echo '<embed src= "../uploaded_files_research/'.$data["url"].'" width= "100%" height="1200px">';
			?>
			
		</div>
	</div>
</div>

<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.html') ?>