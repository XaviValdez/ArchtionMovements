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

<script>
// When the user clicks on div, open the popup
function Contact(id) {
  var other = document.getElementById("cita-popup"+id);
  var popup = document.getElementById("contacto-popup"+id);
  popup.classList.toggle("show");
  other.classList.remove('show');
}

function Cita(id) {
  var other = document.getElementById("contacto-popup"+id);
  var popup = document.getElementById("cita-popup"+id);
  popup.classList.toggle("show");
  other.classList.remove('show');
}
</script>


<link rel="stylesheet" type="text/css" href="../css/investigacion.css">

<div class="container text-center mt-3">
	<img src="../img/investigacion/investigacionbanner.png" class="banner w-100">
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
				<div class="row bg-light mt-5">
					<div class="col-2 popup">
					<a onclick="Contact('<?php echo $_GET['id']; ?>');" data-toggle="tooltip" title="Contactar al autor">
						<img src="../img/icons/contacto.png" width="32px">
					</a>
					<span class="popuptext" id="contacto-popup<?php echo $_GET['id']; ?>">Contacto:<br><?php echo $data['author_email']; ?><br><?php echo $data['author_mobile']; ?></span>
					</div>

					<div class="col-2">
					<a href="../uploaded_files_research/'<?php echo $pdf_url; ?>'" data-toggle="tooltip" title="Descargar" download>
						<img src="../img/icons/download.png" width="32px">
					</a>
					</div>

					<div class="col-2 popup">
					<a onclick="Cita('<?php echo $_GET['id']; ?>');" data-toggle="tooltip" title="Citar">
						<img src="../img/icons/cita.png" width="32px">
					</a>
					<span class="popuptext2" id="cita-popup<?php echo $_GET['id']; ?>"><?php echo $data['author']; ?>. (<?php echo substr($data["published_date"], 0, -15); ?>). <?php echo $data["name"];?>.</span>
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