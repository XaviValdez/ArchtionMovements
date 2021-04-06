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