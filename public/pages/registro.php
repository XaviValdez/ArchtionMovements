<?php include('../templates/_header.html') ?>
<?php include('../templates/_navbar.html') ?>

<link rel="stylesheet" type="text/css" href="../css/registro.css">

<div class="container mt-3 mb-5 bg-light">
    <div class="row">
        <img class="img-fluid" src="../img/patron-lg.png">
    </div>
	<div class="row">
        <div class="col-md-12 p-3">
            <h1 class="mt-3 text-center"><b>Regístrate</b></h1>
            <div class="row justify-content-center mt-4">
                <div class="col-4 mb-5">
                    <form>
                        <label class="text-left">Nombre</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="a" aria-describedby="emailHelp" placeholder="Nombre*">
                        </div>

                        <label class="text-left">Apellidos</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="a" placeholder="Apellidos*">
                        </div>

                        <label class="text-left">Email</label>
                        <div class="form-group">
                            <input type="email" class="form-control" id="a" placeholder="Email*">
                        </div>

                        <label class="text-left">Contraseña</label>
                        <div class="form-group">
                            <input type="password" class="form-control" id="a" placeholder="Contraseña*">
                        </div>
                        
                        <label class="text-center mt-3">Al registrarme acepto y estoy de acuerdo con los <a href="terminosycondiciones">términos y condiciones</a></label>
                        <div class="center">
                            <button type="submit" class="btn btn-block mybtn bg-green tx-tfm">Registrarme</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>

<?php include('../templates/_loginmodal.html') ?>
<?php include('../templates/_footer.html') ?>