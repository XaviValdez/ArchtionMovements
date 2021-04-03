<?php
require_once("assets/config/config.php");
require_once("assets/functions/functions.php");
if(!isCurrentActiveSession()){
  header("Location:login.php");
}
global $version;
$project=getProyects(null,$_GET['id']);
list($div_img,$order)=getImages("projects",$_GET['id']);
?>
<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <?php
      require_once("partial/navbar.php");
      ?>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Modifica proyecto</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Modifica un proyecto</h5>
              </div>
              <div class="card-body">
                <form id="edit_project" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" name='name' value="<?php echo $project[0]['name'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Usuario</label>
                        <select name='user_id' class="form-control">
                          <?php
                          $users=getListUser(1);//getting active users
                          foreach ($users as $value) {
                            $option='<option value="'.$value['id'].'">'.$value['first_name'].' '.$value['last_name'].' '.$value['email'].'</option>';
                            if($value['id']==$project[0]['u_id']){
                              $option='<option value="'.$value['id'].'" selected>'.$value['first_name'].' '.$value['last_name'].' '.$value['email'].'</option>';
                            }
                            echo $option;
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Tipo</label>
                        <select name='project_type' class="form-control">
                          <?php
                          $p_type=getProyectsTypes();//getting active users
                          foreach ($p_type as $value) {
                            $option='<option value="'.$value['id'].'">'.$value['description'].'</option>';
                            if($value['id']==$project[0]['project_type']){
                              $option='<option value="'.$value['id'].'" selected>'.$value['description'].'</option>';
                            }
                            echo $option;
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Clasificacion</label>
                        <select name='clasification' class="form-control">
                          <?php
                          $p_clasification=getProyectsClasification();//getting active users
                          foreach ($p_clasification as $value) {
                            $option='<option value="'.$value['id'].'">'.$value['description'].'</option>';
                            if($value['id']==$project[0]['clasification']){
                              $option='<option value="'.$value['id'].'" selected>'.$value['description'].'</option>';
                            }
                            echo $option;
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Clasificacion</label>
                        <select name='status' class="form-control">
                          <option value="1" <?php echo $project[0]['status']=="1"?"selected":""; ?>>Activo</option>
                          <option value="2" <?php echo $project[0]['status']=="2"?"selected":""; ?>>Pendiente</option>
                          <option value="3" <?php echo $project[0]['status']=="3"?"selected":""; ?>>Rechazado</option>
                          <option value="4" <?php echo $project[0]['status']=="4"?"selected":""; ?>>Inactivo</option>
                         
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Descripción</label>
                        <textarea type="text" class="form-control" placeholder="Country" name='description' ><?php echo $project[0]['description']; ?> </textarea> 
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Ubicación</label>
                        <textarea type="text" class="form-control" placeholder="Country" name='location' ><?php echo $project[0]['location']; ?> </textarea> 
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Social</label>
                        <textarea type="text" class="form-control" placeholder="Country" name='social' > <?php echo $project[0]['social']; ?></textarea> 
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Ambiente</label>
                        <textarea type="text" class="form-control" placeholder="Country" name='environment' > <?php echo $project[0]['environment']; ?></textarea> 
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Economico</label>
                        <textarea type="text" class="form-control" placeholder="Country" name='economy' > <?php echo $project[0]['economy']; ?></textarea> 
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Objetivo</label>
                        <textarea type="text" class="form-control" placeholder="Country" name='objective' > <?php echo $project[0]['objective']; ?></textarea> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Selecciona una o varias imágenes secundarias</label> 
                        <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
                        <input class="form-control" type="file" name="files[]" id="files" multiple />
                        <div class="min_img">
                          <?php echo $div_img; ?>
                        </div>
                        <input type="text" name="order" hidden="true" value="<?php echo htmlspecialchars($order); ?>">
                        <input type="text" name="id" hidden="true" value="<?php echo $_GET['id']; ?>">
                        <input type="text" name="ptxt_id" hidden="true" value="<?php echo $project[0]['ptxt_id']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Crear</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script src='assets/js/ajaxes/projects.js?v=<?php echo $version; ?>'></script>

</body>

</html>