<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>

<link rel="stylesheet" type="text/css" href="../css/red_de_trabajo.css">

<div class="container mt-4">
    <!-- Search Bar -->
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

    <div class="row">
        <div class="col-md-4 p-4">

            <!-- Perfil -->
            <div class="row m-0 bg-blue">
                <img src="https://dummyimage.com/500x500/ggg/aaa" class="img-profile">
            </div>
            <div class="row p-5 m-0 bg-blue">
                <h4>Nombre<br>Apellido Apellido</h4><br>
                <p class="lead">Arquitectura<br>Necesidad: Capacitación, Voluntariado</p><br>
                <p class="lead">Xalapa, Ver, MX</p><br>
            </div>
            <div class="row p-5 m-0 bg-blue">
                <a href="#" class="btn btn-lg btn-outline-dark">Contactar</a>
            </div>
            
        </div>

        <div class="col-md-8 p-4">
        </div>    
    </div>
</div>

<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.php') ?>