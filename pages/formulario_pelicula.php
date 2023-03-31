<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CineABC</title>
    <!-- Plugin CSS-->
    <link rel="stylesheet" href="../public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="stylesheet" href="../public/assets/vendors/css/vendor.bundle.base.css">
  </head>
  <body>
    <div class="container-scroller">
      <!--Barra de navegación lateral-->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a href="http://localhost/prueba%20tecnica%20ii/index.php"> 
          <h1>CineABC</h1>
        </a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../public/assets/icons/logo.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Duvan Camilo</h5>
                  <span>Empleado</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="http://localhost/prueba%20tecnica%20ii/cliente.php" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Rol Cliente</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navegación</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="formulario_pelicula.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Registro de Peliculas</span>
            </a>
          </li>
        </ul>
      </nav>
      <!--Barra superior-->
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../public/assets/icons/logo.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Duvan Camilo</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!--Panel-->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h1 class="page-title">Registro de Peliculas</h1>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-description">Ingresa los datos de la pelicula </p>
                    <form class="forms-sample"  method="POST" action="../public/app/models/pelicula.php">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Titulo</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Los Vengadores" name="titulo" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Director</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kevin Feige" name="director" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Año</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="2019" name="anio" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Género</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Todo el mundo" name="genero" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Duración</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="181 min" name="duracion" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Clasificación</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Ciencia Ficción" name="clasificacion" required>
                      </div>
                    
                      <button type="submit" class="btn btn-primary mr-2">Enviar</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                  <?php
                      // Muestra el mensaje de respuesta del servidor si existe
                      if (isset($_GET['mensaje'])) {
                        echo $_GET['mensaje'];
                       }
                    ?>
                </div>
              </div>
             <br>
          <!--Barra Inferior-->  
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="../public/assets/vendors/js/vendor.bundle.base.js"></script>

  </body>
</html>