<!-- Modal -->
<div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="ModalLogin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2 class="text-center"><b>¡Hola!</b></h2>
        <h5 class="text-center"><small><b>Inicia sesión o regístrate</b></small></h5>

        <div id="first">
          <div class="myform form">
              <form action="" method="post" name="login">
                <div class="center">
                    <div class="col-md-6 text-center mt-3">

                      <div class="form-group">
                        <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Correo electrónico">
                      </div>
                    
                      <div class="form-group">
                        <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Contraseña">
                      </div>
                      
                      <div class="form-group">
                        <p class="text-center"><a href="#">Olvidé mi contraseña</a></p>
                      </div>

                    </div>
                </div>
                <div class="center">
                    <div class="col-md-4 text-center">
                      <button type="submit" class=" btn btn-block mybtn bg-green tx-tfm">Iniciar sesión</button>
                    </div>
                </div>
                <div class="center">
                    <div class="col-md-4 text-center mt-3">
                      <button type="submit" class=" btn btn-block mybtn btn-dark tx-tfm">Registrarme</button>
                    </div>
                </div>
              </form>
          </div>
        </div>

      </div>
      <div class="modal-footer mt-5">
        <img class="img-fluid" src="{{ asset('img/patron.png') }}">
      </div>
    </div>
  </div>
</div>