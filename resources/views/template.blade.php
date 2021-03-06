<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <link rel="icon" type="image/png" href="{{ asset('img/dark_favicon.png') }}" sizes="64x64">
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
                        <a class="nav-link" href="{{ route('investigacion') }}">Investigación</a>
                    </li>
                    <li class="nav-item m-3 active">
                        <a class="nav-link" href="">Red de trabajo</a>
                    </li>
                    <li class="nav-item m-3 active">
                        <a class="nav-link" href="{{ route('eventos') }}">Eventos</a>
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
            <br><br>
            <a href="{{ route('landing') }}">
                <img class="mt-4 logo-footer" src="{{ asset('img/dark_logo.png') }}">
            </a>
            <br><br>
            <div class="container mt-5 mb-5">
                <div class="row mb-5">
                    <div class="col-sm">
                        <a href="{{ route('acercaDe') }}">Acerca de</a>
                    </div>
                    <div class="col-sm">
                        <a href="{{ route('proyectos') }}">Proyectos & obras</a>
                    </div>
                    <div class="col-sm">
                        <a href="{{ route('investigacion') }}">Investigación</a>
                    </div>
                    <div class="col-sm">
                        <a href="">Red de trabajo</a>
                    </div>
                    <div class="col-sm">
                        <a href="{{ route('eventos') }}">Eventos</a>
                    </div>
                    <div class="col-sm">
                        <a href="">Tienda</a>
                    </div>
                    <div class="col-sm">
                        <a href="">Contacto</a>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="row justify-content-center">
                            <div class="col-2 text-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                            </div>
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                            </div>
                            <div class="col-2 text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
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