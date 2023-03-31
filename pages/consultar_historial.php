<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CineABC</title>
    <!-- Plugin CSS-->
    <link rel="stylesheet" href="../public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../public/assets/css/style.css">
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
      <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Consultar Historial</h4>
                    <p class="card-description">Realiza tus consultas de <code>historial de las peliculas</code></p>
                    <form class="form-inline" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                      <input type="text" class="form-control mb-2 mr-sm-2" placeholder="ID Pelicula" name="busquedaAlquiler">
                      <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Fecha Alquiler" name="busquedaAlquiler">
                      <button type="submit" class="btn btn-primary mb-2" name="boton1">Consultar</button>
                    </form>
                    <?php
                    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if (isset($_POST['boton1'])) {
                           include 'cliente.php';
                           $consulta = new Cliente();
                           $datosAlquiler = $consulta->ObtenerHistorial();     
                    }
                }
      
                  ?>
                  <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Resultado</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </th>
                            <th>Fecha de alquiler</th>
                            <th>ID pelicula</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td><?php echo $datosAlquiler['FECHA_ALQUILER'] . "<br>"; ?></td>
                            <td><?php echo $datosAlquiler['ID_PELICULA'] . "<br>"; ?></td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                  </div>
                  
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
  </body>
</html>