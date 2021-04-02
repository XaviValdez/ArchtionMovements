<div class="header bg-white py-2">
    <div class="container mt-2">
        <div class="row" id="hide-mobile">
            <div class="col-6">
                <a href="contacto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-envelope-fill icon" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                    </svg>
                    Contacto
                </a>
            </div>
            <div class="col-6 text-right">
                <span class="mr-2">
                    <a href="enviar_material">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-share-fill icon" viewBox="0 0 16 16">
                            <path
                                d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z" />
                        </svg>
                        Enviar material
                    </a>
                </span>
                |
                <?php
                if(isset($_SESSION['user_id'])){
                    ?>
                    <span class="ml-2">
                        <a href="logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-circle icon" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            Cerrar sesión
                        </a>
                    </span>
                    <?php
                }else{
                    ?>
                    <span class="ml-2">
                        <a href="registro" data-toggle="modal" data-target="#ModalLogin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-circle icon" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            Iniciar sesión
                        </a>
                    </span>
                    <?php
                }

                ?>
                
            </div>
        </div>
        <div class="text-center">
            <a href="index">
                <img class="mt-4 logo" src="../img/logo.png">
            </a>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-sm sticky-top navbar-light bg-white underline">
    <div class="container">
        <button id="hide-mobile" class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbar1">

            <a class="navbar-brand" href="index">
                <img id="navbar-logo" src="../img/small_logo.png" alt="Logo">
            </a>

            <ul class="navbar-nav">
                <li class="nav-item m-3 active">
                    <?php $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                    <?php 
                    if(strpos($current_url, 'acerca_de')) {
                        echo '<a class="nav-link" href="acerca_de"><u>Acerca de</u></a>';
                    }
                    else {
                        echo '<a class="nav-link" href="acerca_de">Acerca de</a>';
                    }
                    ?>
                    
                </li>
                <li class="nav-item m-3 active">
                    <?php 
                    if(strpos($current_url, 'proyectos') || strpos($current_url, 'publicacion')) {
                        echo '<a class="nav-link" href="proyectos"><u>Proyectos & Obras</u></a>';
                    }
                    else {
                        echo '<a class="nav-link" href="proyectos">Proyectos & Obras</a>';
                    }
                    ?>
                </li>
                <li class="nav-item m-3 active">
                    <?php 
                    if(strpos($current_url, 'investigacion') || strpos($current_url, 'preview') || strpos($current_url, 'leer')) {
                        echo '<a class="nav-link" href="investigacion"><u>Investigación</u></a>';
                    }
                    else {
                        echo '<a class="nav-link" href="investigacion">Investigación</a>';
                    }
                    ?>
                </li>
                <li class="nav-item m-3 active">
                    <?php 
                    if(strpos($current_url, 'red') || strpos($current_url, 'profile')) {
                        echo '<a class="nav-link" href="red_de_trabajo"><u>Red de trabajo</u></a>';
                    }
                    else {
                        echo '<a class="nav-link" href="red_de_trabajo">Red de trabajo</a>';
                    }
                    ?>
                </li>
                <li class="nav-item m-3 active">
                    <?php 
                    if(strpos($current_url, 'evento')) {
                        echo '<a class="nav-link" href="eventos"><u>Eventos</u></a>';
                    }
                    else {
                        echo '<a class="nav-link" href="eventos">Eventos</a>';
                    }
                    ?>
                </li>
                <li class="nav-item m-3 active">
                    <?php 
                    if(strpos($current_url, 'tienda') || strpos($current_url, 'producto')) {
                        echo '<a class="nav-link" href="tienda"><u>Tienda</u></a>';
                    }
                    else {
                        echo '<a class="nav-link" href="tienda">Tienda</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>