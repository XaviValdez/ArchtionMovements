<!-- Modal -->
<div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="ModalLogin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content bg-light">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2 class="text-center"><b>¡Hola!</b></h2>
        <h5 class="text-center"><small><b>Inicia sesión o regístrate</b></small></h5>
        <div class="center col-12">
          <div class="fb-login-button" data-width="" data-size="large" data-button-type="login_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="true" onlogin="checkLoginState();"></div>
        </div>
        

        <div id="first">
          <div class="myform form">
              <form id="login_user" method="post" name="login">
                <div class="center">
                    <div class="col-md-6 text-center mt-3">

                      <div class="form-group">
                        <input type="email" name="email"  class="form-control" placeholder="Correo electrónico">
                      </div>
                    
                      <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                      </div>
                      
                      <div class="form-group">
                        <p class="text-center"><a href="#">Olvidé mi contraseña</a></p>
                      </div>

                    </div>
                </div>
                <div class="center">
                    <div class="col-md-4 text-center">
                      <button type="submit" class="btn btn-block mybtn bg-green tx-tfm">Iniciar sesión</button>
                    </div>
                </div>
                <div class="center">
                    <div class="col-md-4 text-center mt-3">
                      <a class=" btn btn-block mybtn btn-dark tx-tfm" href="registro">Registrarme</a>
                    </div>
                </div>
              </form>
          </div>
        </div>

      </div>
      <div class="modal-footer mt-5 pb-0 pr-0 pl-0 border-top-0">
        <img class="img-fluid" src="../img/patron.png">
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/ajaxes/user_login.js"></script>