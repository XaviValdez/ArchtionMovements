<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arction Movements</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div class="header bg-light py-2">
        <div class="container mt-2">
            <div class="row" id="hide-mobile">
                <div class="col-6">
                    <a href="{{ route('contacto') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill icon" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                        </svg>
                        Contacto
                    </a>
                </div>
                <div class="col-6 text-right">
                    <span class="mr-2">
                        <a href="{{ route('enviarMaterial') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill icon" viewBox="0 0 16 16">
                                <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z" />
                            </svg>
                            Enviar material
                        </a>
                    </span>
                    |
                    <span class="ml-2">
                        <a href="{{ route('registro') }}" data-toggle="modal" data-target="#ModalLogin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle icon" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            Iniciar sesión
                        </a>
                    </span>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('landing') }}">
                    <img class="mt-4 logo" src="{{ asset('img/logo.png') }}">
                </a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light underline">
        <div class="container">
            <button id="hide-mobile" class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbar1">

                <a class="navbar-brand" href="{{ route('landing') }}">
                    <img id="navbar-logo" src="{{ asset('img/small_logo.png') }}" alt="Logo">
                </a>

                <ul class="navbar-nav">
                    <li class="nav-item m-3 active">
                        <a class="nav-link" href="{{ route('acercaDe') }}">Acerca de</a>
                    </li>
                    <li class="nav-item m-3 active">
                        <a class="nav-link" href="{{ route('proyectos') }}">Proyectos & Obras</a>
                    </li>
                    <li class="nav-item m-3 active">
                        <a class="nav-link" href="">Investigación</a>
                    </li>
                    <li class="nav-item m-3 active">
                        <a class="nav-link" href="">Red de trabajo</a>
                    </li>
                    <li class="nav-item m-3 active">
                        <a class="nav-link" href="">Eventos</a>
                    </li>
                    <li class="nav-item m-3 active">
                        <a class="nav-link" href="">Tienda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('body')

    <footer class="bg-dark text-center text-lg-start mt-3 text-white">
        <div class="text-center p-3 bg-black">
            <br>
            <a href="{{ route('landing') }}">
                <img class="mt-4 logo-footer" src="{{ asset('img/dark_logo.png') }}">
            </a>
            <div class="container mt-5 mb-3">
                <div class="row">
                    <div class="col-sm">
                        <a href="{{ route('acercaDe') }}">Acerca de</a>
                    </div>
                    <div class="col-sm">
                        <a href="{{ route('proyectos') }}">Proyectos & obras</a>
                    </div>
                    <div class="col-sm">
                        <a href="">Investigación</a>
                    </div>
                    <div class="col-sm">
                        <a href="">Red de trabajo</a>
                    </div>
                    <div class="col-sm">
                        <a href="">Eventos</a>
                    </div>
                    <div class="col-sm">
                        <a href="">Tienda</a>
                    </div>
                    <div class="col-sm">
                        <a href="">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center p-3 bg-gray" style="letter-spacing: 5px;">
            <small>TODOS LOS DERECHOS RESERVADOS</small>
        </div>
    </footer>


    <!-- JQuery Popper and Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- NAVBAR JQUERY-->
    <script src="{{ asset('js/navbar.js') }}"></script>

    @extends('_loginmodal')

</body>

</html>