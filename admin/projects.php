<?php
require_once("assets/config/config.php");
require_once("assets/functions/functions.php");
if(!isCurrentActiveSession()){
  header("Location:login.php");
}
global $version;
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

<body class="">
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
            <a class="navbar-brand" href="#pablo">Projects</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
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
      <?php
        $projects_actives=getProyects(1);
        $projects_inactives=getProyects(4);
        $projects_pending=getProyects(2);
        $projects_rejected=getProyects(3);
        $table_head='<table class="table">
          <thead class=" text-primary">
            <th>
              ID
            </th>
            <th>
              User id
            </th>
            <th>
              Nombre
            </th>
            <th>
              Descripción
            </th>
            <th>
              Social
            </th>
            <th>
              Ambiente
            </th>
            <th>
              Economía
            </th>
            <th>
              Objetivo
            </th>
            <th>
              Creado
            </th>
            <th>
              Estado
            </th>
          </thead>
          <tbody>';
        if(!empty($projects_actives)){
          //get the actives
          $table_actives=table_helper_projects($projects_actives,$table_head);
          $table_actives.='</tbody>
                  </table>';
          $row_active='<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Proyectos activos</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                     '.$table_actives.'
                  </div>
                </div>
              </div>
            </div>
          </div>';
          echo $row_active;
        }else if(!empty($projects_inactives)){
          //get the inactives
          $table_inactive=table_helper_projects($projects_actives,$table_head);
          $table_inactive.='</tbody>
                  </table>';
          $row_inactive='<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Proyectos inactivos</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                     '.$table_inactive.'
                  </div>
                </div>
              </div>
            </div>
          </div>';
          echo $row_inactive;
        }else if(!empty($projects_pending)){
          //get the pendings
          $table_pending=table_helper_projects($projects_actives,$table_head);
          $table_pending.='</tbody>
                  </table>';
          $row_pending='<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Proyectos pendientes</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                     '.$table_pending.'
                  </div>
                </div>
              </div>
            </div>
          </div>';
          echo $row_pending;
        }else if(!empty($projects_rejected)){
          //get the rejected
          $table_rejected=table_helper_projects($projects_actives,$table_head);
          $table_rejected.='</tbody>
                  </table>';
          $row_rejected='<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Proyectos rechazados</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                     '.$table_rejected.'
                  </div>
                </div>
              </div>
            </div>
          </div>';
          echo $row_rejected;
        }
        $no_table='<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Crea proyectos</h4>
                </div>
                <div class="card-body">
                  <div class="col-md-6 offset-md-3">
                      <a href="create_project.php">
                        <button class="btn btn-primary btn-block">Crear</button>
                      </a>
                  </div>
                </div>
              </div>
            </div>
          </div>';
          echo $no_table;
      ?>
        
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
  <script src="assets/js/ajaxes/projects.js?v=<?php echo $version; ?>"></script>

</body>

</html>