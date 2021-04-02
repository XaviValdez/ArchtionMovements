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
                <div>
                <h4>Nombre<br>Apellido Apellido</h4><br>
                <p class="lead">Arquitectura</p><br>
                <p class="lead">Xalapa, Ver, MX</p><br>
                </div>
            </div>
            <div class="row p-5 m-0 bg-blue">
                <a href="#" class="btn btn-lg btn-outline-dark mr-3">Contactar</a>

                <a class="btn btn-lg btn-dark" href="profile_edit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil icon" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg> Editar perfil
                </a>
            </div>
            
        </div>

        <div class="col-md-8 p-4">

            <!-- Portafolio -->
            <div class="row p-0 mb-4">
                <div class="col-md-4 bg-red p-4">
                    <br>
                    <h4 class="text-white">Portafolio</h4>
                    <br>
                    <a href="profile_projects" class="btn btn-lg btn-outline-light">Ver más</a>
                </div>
                <div class="col-md-8 p-0">
                    <img src="https://dummyimage.com/900x400/ggg/aaa" class="img-portafolio">
                </div>
            </div>
            
            <!-- Redes sociales y Curriculum -->
            <div class="row mb-4">

                <div class="col-md-6 pl-0">
                    <div class="block-redes bg-pink p-4">
                        <h4 class="text-white">Redes sociales</h4>
                        <hr class="hr-white">
                        <p class="lead">Lorem Ipsum</p>
                        <p class="lead">Lorem Ipsum</p>
                        <p class="lead">Lorem Ipsum</p>
                    </div>
                </div>

                <div class="col-md-6 pr-0">
                    <div class="block-curriculum bg-orange p-4">
                        <h4 class="text-white">Curriculum</h4>
                        <hr class="hr-white">
                        <p class="lead">Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
                    </div>
                </div>

            </div>

            <div class="row mb-4">
                <div class="col-md-12 bg-green p-4">
                    <h4 class="text-white">Necesidades</h4>
                    <hr class="hr-white">
                    <br>
                    <p class="lead">Lorem Ipsum</p>
                    <p class="lead">Lorem Ipsum</p>
                    <p class="lead">Lorem Ipsum</p>
                </div>

            </div>

        </div>

    </div>
</div>

<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.php') ?>