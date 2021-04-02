<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>

<link rel="stylesheet" type="text/css" href="../css/registro.css">

<div class="container mt-3 mb-5">
    <div class="row">
        <img class="img-fluid" src="../img/patron-lg.png">
    </div>
	<div class="row">
        <div class="col-md-12 p-3">
            <h1 class="mt-3 text-center"><b>Regístrate</b></h1>
            <div class="row justify-content-center mt-4">
                <div class="col-4 mb-5">
                    <form id="register_user" method="post" name="register" class="mb-3">
                        <label class="text-left">Nombre</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="Nombre*">
                        </div>

                        <label class="text-left">Apellido</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Apellido*">
                        </div>

                        <label class="text-left">Email</label>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email*">
                        </div>

                        <label class="text-left">Contraseña</label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña*">
                        </div>
                        
                        <label class="text-center mt-3">Al registrarme acepto y estoy de acuerdo con los <a href="terminosycondiciones">términos y condiciones</a></label>
                        <div class="center">
                            <button type="submit" class="btn btn-block mybtn bg-green fixed-btn-size">Registrarme</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/ajaxes/user_register.js"></script>

<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.php') ?>