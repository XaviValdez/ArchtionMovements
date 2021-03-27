<!-- Modal Con Planes-->
<div class="modal fade" id="ModalLogin2" tabindex="-1" role="dialog" aria-labelledby="ModalLogin2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content bg-light">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pb-0">
        <div class="row">
          <div class="col-md-6 p-0 bg-light">
            <h2 class="text-center mt-3"><b>¡Hola!</b></h2>
            <h5 class="text-center"><small><b>Inicia sesión o regístrate</b></small></h5>

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
                    <div class="center">
                      <div class="col-md-3 text-center mt-3"><hr></div>
                      <div class="col-md-4 text-center mt-3">
                        <p class="lead"><small>O inicia sesión con:</small></p>
                      </div>
                      <div class="col-md-3 text-center mt-3"><hr></div>
                      
                    </div>
                    <div class="center d-flex justify-content-center">
                        <a class=" btn btn-primary fixed-btn-size m-4" style="background-color: #4267B2;" href="registro">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook icon" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                          Facebook
                        </a>
                        <a class=" btn btn-secondary bg-white text-dark fixed-btn-size m-4" href="registro">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google icon" viewBox="0 0 16 16">
                          <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                        </svg>
                        Google
                        </a>
                    </div>
                  </form>
              </div>
            </div>
          </div>


          <div class="col-md-6 p-0 bg-light">
            <h5 class="mt-3 mb-0 text-center">Conoce</h5>
            <h2 class="mt-0 mb-3 text-center"><small><b>Nuestros planes</b></small></h2>

            <div class="d-flex justify-content-center mb-3">
              <div class="modal-block bg-green text-white p-3 m-3 rounded">
                <h5 class="text-left">Plan <br>gratuito</h5>
                <br><br><br>
                <button type="button" onclick="location.href = 'index#PlanesUsuarios';" class="btn btn-outline-light">Conoce más</button>
              </div>
              <div class="modal-block bg-green text-white p-3 m-3 rounded">
                <h5 class="text-left">Plan <br>plus</h5>
                <br><br><br>
                <button type="button" onclick="location.href = 'index#PlanesUsuarios';" class="btn btn-outline-light">Conoce más</button>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <div class="modal-block bg-blue text-white p-3 m-3 rounded">
                <h5 class="text-left">Plan <br>publicitario<br>profesionista</h5>
                <br><br>
                <button type="button" onclick="location.href = 'index#PlanesPublicitarios';" class="btn btn-outline-light">Conoce más</button>
              </div>
              <div class="modal-block bg-blue text-white p-3 m-3 rounded">
                <h5 class="text-left">Plan <br>publicitario<br>empresarial</h5>
                <br><br>
                <button type="button" onclick="location.href = 'index#PlanesPublicitarios';" class="btn btn-outline-light">Conoce más</button>
              </div>
            </div>

          </div>

        </div>
        
      </div>

      <div class="modal-footer mt-5 p-0 border-top-0">
        <img class="img-fluid w-100" src="../img/patron.png">
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/ajaxes/user_login.js"></script>