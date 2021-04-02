<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>

<link rel="stylesheet" type="text/css" href="../css/red_de_trabajo.css">

<div class="container mt-4">
    <div class="row mt-3 mb-5 pl-4 pr-4">
        <div class="col-sm-4 mt-2">
            <form>
            <!-- <input type="text" id="lname" name="lname" placeholder="Buscar en Archtion Movements"> -->
            <input class="form-control form-control-lg" type="text" placeholder="Buscar perfil">
            </form>
        </div>

        <div class="col-sm-2 mt-2">
            <div class="dropdown">
                <a class="btn btn-lg btn-block text-center bg-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ubicación
                </a>
                
                <div class="dropdown-menu text-center w-100" aria-labelledby="dropdownMenuLink1">
                    <a class="dropdown-item" href="#">Uno</a>
                    <a class="dropdown-item" href="#">Dos</a>
                    <a class="dropdown-item" href="#">Tres</a>
                </div>
            </div>
        </div>

        <div class="col-sm-2 mt-2">
            <div class="dropdown">
                <a class="btn btn-lg btn-block text-center bg-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profesión
                </a>
                
                <div class="dropdown-menu text-center w-100" aria-labelledby="dropdownMenuLink2">
                    <a class="dropdown-item" href="#">Uno</a>
                    <a class="dropdown-item" href="#">Dos</a>
                    <a class="dropdown-item" href="#">Tres</a>
                </div>
            </div>
        </div>

        <div class="col-sm-2 mt-2">
            <div class="dropdown">
                <a class="btn btn-lg btn-block text-center bg-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Necesidad
                </a>
                
                <div class="dropdown-menu text-center w-100" aria-labelledby="dropdownMenuLink3">
                    <a class="dropdown-item" href="#">Uno</a>
                    <a class="dropdown-item" href="#">Dos</a>
                    <a class="dropdown-item" href="#">Tres</a>
                </div>
            </div>
        </div>

        <div class="col-sm-2 mt-2">
            <a href="#" class="btn btn-lg btn-block text-center bg-white btn-border">Mostrar todo</a>
        </div>
    </div>
    <div class="row justify-content-start">
        <div class="col-sm-4 pr-5 pl-5 pb-5">
            <div class="box bg-notsolight p-4">
            <h4 class="mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill icon mr-1" viewBox="0 0 16 16">
            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
            </svg>
                Filtros
            </h4>
				
				<h5><b>Categorías</b></h5><hr>
				
				<div class="form-check">
				<!-- <input class="form-check-input" type="checkbox" value="" id="todos"/> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill icon mr-1" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                </svg>
				<label class="form-check-label" for="todos">
					<h5>Profesionista</h5>
				</label>
				</div>

				<div class="form-check">
				<!-- <input class="form-check-input" type="checkbox" value="" id="articulo"/> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill icon mr-1" viewBox="0 0 16 16">
                <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
				<label class="form-check-label" for="articulo">
					<h5>Estudiante</h5>
				</label>
				</div><hr>

				<div class="form-check mb-5">
				<!-- <input class="form-check-input" type="checkbox" value="" id="libro"/> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building icon mr-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg>
				<label class="form-check-label" for="libro">
					<h5>Empresarial</h5>
				</label>
				</div>

            <h5><b>Tipo de búsqueda</b></h5><hr>

                <div class="form-check">
				<!-- <input class="form-check-input" type="checkbox" value="" id="libro"/> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person icon mr-1" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
				<label class="form-check-label" for="libro">
					<h5>Perfil</h5>
				</label>
				</div>

				<div class="form-check">
				<!-- <input class="form-check-input" type="checkbox" value="" id="libro"/> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill icon mr-1" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
				<label class="form-check-label" for="libro">
					<h5>Ubiación</h5>
				</label>
				</div>

				<div class="form-check">
				<!-- <input class="form-check-input" type="checkbox" value="" id="libro"/> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill icon mr-1" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                </svg>
				<label class="form-check-label" for="libro">
					<h5>Profesión</h5>
				</label>
				</div>

				<div class="form-check">
				<!-- <input class="form-check-input" type="checkbox" value="" id="espanol"/> -->
                
				<label class="form-check-label" for="espanol">
					<h5>? <span class="ml-1">Necesidad</span></h5>
				</label>
				</div>

            </div>
        
        </div>
        <?php 
            for ($i = 0; $i < 8; $i++) {
                echo '
                <div class="col-sm-4 pr-5 pl-5">
                    <div class="card mb-4 box-shadow hover_img_big">
                        <a href="profile">
                            <img class="card-img-top square-img" src="http://placehold.it/500x500" alt="Card image cap">
                        </a>
                        <div class="mt-3 pl-3">
                            <div class="row">
                                <h5 class="card-title">Nombre Apellido</h5><br>
                            </div>
                            <div class="row">
                                <h6 class="">Arquitectura</h6>
                            </div>
                            <div class="row">
                                <h6 class="text-muted">Capacitación, voluntariado</h6>
                            </div>
                            <div class="row">
                                <h6 class="text-muted">Xalapa Ver, MX</h6>
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