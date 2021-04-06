<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>
<?php 
	require_once("../assets/config/config.php");
	require_once("../assets/functions/functions.php");

	$projects = getProjects(1);
?>

<div class="container mt-3">

	<!-- MENU -->
	<form id="search_project">
	<div class="row mb-4 text-bold">
		
		<div class="col-sm-4">
			<label>Palabra clave</label>
			<input class="form-control" type="text" placeholder="Palabra clave" name="textField">
		</div>

		<!-- <div class="col-sm-2">
			<div class="form-group">
				<label>Ubicación</label>
				<select name='project_type' class="form-control btn-block">
					<option value="0"> </option>
					<option value="0">A</option>
					<option value="0">B</option>
					<option value="0">C</option>
				</select>
			</div>
		</div> -->

		<div class="col-md-2">
          <div class="form-group">
            <label>Tipo</label>
            <select name='project_type' class="form-control btn-block">
              <?php
              $p_type=getProyectsTypes();//getting active users
                echo '<option value="0">Todo</option>';

              foreach ($p_type as $value) {
                echo '<option value="'.$value['id'].'">'.$value['description'].'</option>';
              }
              ?>
            </select>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Clasificación</label>
            <select name='clasification' class="form-control btn-block">
              <?php
              $p_clasification=getProyectsClasification();//getting active users
              echo '<option value="0">Todo</option>';
              foreach ($p_clasification as $value) {
                echo '<option value="'.$value['id'].'">'.$value['description'].'</option>';
              }
              ?>
            </select>
          </div>
        </div>

		<div class="col-sm-2">
			<label> &#x200B;</label>
			<a href="#" class="btn btn-block text-center bg-white btn-border" onclick="document.getElementById('search_project').reset();$('#search_project').submit();">Mostrar todo</a>
		</div>

		<div class="col-sm-2">
			<div class="form-group">
			<label> &#x200B;</label>
			<button class="btn bg-blue btn-block" type="submit">Buscar</button>
			</div>
		</div>
		

	</div>
	</form>
	<!-- CARDS -->
	<div class="row" id="projectsDiv">
		<?php
			foreach ($projects as $project) {

				$img = getImg($project["p_id"]);
				$date = substr($project["crated_date"], 0, -9);

				echo '<div class="col-md-4 pr-3">
						<div class="card mb-4 box-shadow hover_img_big">
							<a href="publicacion?id=' . $project["p_id"] . '">
								<img class="card-img-top standarized_img" src="../img/uploads/' . $img[0]["url"] . '" alt="Card image cap">
							</a>
							<div class="mt-3">
								<div class="row">
									<div class="col-10">
										<h5 class="card-title">' . $project["name"] . '</h5>
										<h6 class="card-subtitle mb-2 text-muted">' . $date . '</h6>
									</div>
									<div class="col-2 text-right">
										<h5 class="card-title"><img class="img-fluid premio-icon" src="../img/icons/premio.png"></h5>
									</div>
								</div>
							</div>
						</div>
					</div>';
			}
		?>
	</div>
</div>


<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.php') ?>
<script src='../js/ajaxes/search_project.js?v=<?php echo $version; ?>'></script>