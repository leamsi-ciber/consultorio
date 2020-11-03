<!DOCTYPE html>
<html lang="en">
  <head>
<?php
if(!isset($_SESSION['user'])){
header('Location:login.php');
}else{
    header('index.php');
}?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Consultorio M&C</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./images/favicon.png" />
 
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="images/logo.svg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Consultorio M&C</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
                     
            <li class="nav-item dropdown">
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs"<?php  if($_SESSION['nombre']){echo"style= ''src='images/faces/{$_SESSION['nombre']}.jpeg'";}?> alt="Profile image"> <span class="font-weight-normal"> <?php echo$_SESSION['nombre'], ' ', $_SESSION['apellido']?> </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md" <?php if($_SESSION['nombre']){echo"style= 'height:200px;'src='images/faces/{$_SESSION['nombre']}.jpeg'";}?> alt="Profile image">
                  <p class="mb-1 mt-3"><?php echo$_SESSION['nombre'], ' ', $_SESSION['apellido']?></p>
                  <p class="font-weight-light text-muted mb-0"></p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item" href= "logout.php"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs" <?php if($_SESSION['nombre']){echo"style= ''src='images/faces/{$_SESSION['nombre']}.jpeg'";}?> alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo$_SESSION['nombre'], ' ', $_SESSION['apellido']?></p>
                  <p class="designation"><?php if($_SESSION['tipo']==1){echo"Administrador";}else if($_SESSION['tipo']==2){echo"Asistente";}else{echo"Medico";}?></p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>

            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Menu</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
          
            <?php
            if(isset($_SESSION['user']))
            {
                echo"
                <li class='nav-item'>
                <a class='nav-link' href=''>
                  <span class='menu-title'>Calendario de citas</span>
                  <i class='icon-calendar menu-icon'></i>
                </a>
              </li>
              <li class='nav-item'>
              <a class='nav-link' href='consulta.php'>
                <span class='menu-title'>Consultas</span>
                <i class='icon-notebook menu-icon'></i>
              </a>
            </li>
            <li class='nav-item'>
            <a class='nav-link' href='citas.php'>
              <span class='menu-title'>Citas</span>
              <i class='icon-location-pin menu-icon'></i>
            </a>
          </li>
          <li class='nav-item nav-category'>
              <span class='nav-link'>Pacientes</span>
            </li>
          <li class='nav-item'>
          <a class='nav-link' href='pasientes.php'>
                <span class='menu-title'>Pacientes</span>
                <i class='icon-people menu-icon'></i>
              </a>
            </li>
            <li class='nav-item'> <a class='nav-link' href='buscar.php'> <span class='menu-title'>Registro</span> <i class='icon-docs menu-icon'> </i> </a> </li>
            <li class='nav-item'>
            <a class='nav-link' href='reporte.php'>
              <span class='menu-title'>Reportes</span>
              <i class='icon-chart menu-icon'></i>
            </a>
          </li>   
            ";
           
            if($_SESSION['tipo'] == 3)
                      {
                echo"
                <li class='nav-item nav-category'>
                <span class='nav-link'>Medico</span>
              </li>
            <li class='nav-item'>
            <a class='nav-link' href='visitas.php'>
                  <span class='menu-title'>Visitas</span>
                  <i class='icon-people menu-icon'></i>
                </a>
              </li>
              <li class='nav-item'>
              <a class='nav-link' href='fondo.php'>
                <span class='menu-title'>Fondos</span>
                <i class='icon-bag menu-icon'></i>
              </a>
            </li>
                ";

                      }if($_SESSION['tipo'] == 1){
                        echo"
                        <li class='nav-item nav-category'>
                        <span class='nav-link'>Administracion</span>
                      </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='usuariogestion.php'>
                          <span class='menu-title'>Control de Usuarios</span>
                          <i class='icon-people menu-icon'></i>
                        </a>
                      </li>
                      <li class='nav-item'>
                      <a class='nav-link'  href='consultas.php'> 
                        <span class='menu-title'>Costos</span>
                        <i class='icon-credit-card menu-icon'></i>
                      </a>
                    </li>
                        ";

                      }
            }
          
            ?>
          </ul>
        </nav>
   