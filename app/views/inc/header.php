<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Donovan Imports</title>
  <!-- Favicon -->
  <link href="<?php echo ROUTE_URL?>/assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->

  <link href="<?php echo ROUTE_URL?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo ROUTE_URL?>/assets/fa/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo ROUTE_URL?>/assets/css/argon.css?v=1.1.0" rel="stylesheet">
  <!-- Mis estilos css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="<?php echo ROUTE_URL?>/index">
          <img alt="image" src="<?php echo ROUTE_URL?>/img/logo-white.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
          aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="<?php echo ROUTE_URL?>/index">
                  <img alt="image" src="<?php echo ROUTE_URL?>/img/logo-white.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global"
                  aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
              <a href="<?php echo ROUTE_URL?>/index" class="nav-link">
                <i class="fas fa-home"></i>
                <span class="nav-link-inner--text">Inicio</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo ROUTE_URL?>/Renta" class="nav-link">
                <i class="fas fa-car"></i>
                <span class="nav-link-inner--text">Rentar</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo ROUTE_URL?>/Renta/car" class="nav-link">
                <i class="fas fa-car"></i>
                <span class="nav-link-inner--text">Citas</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo ROUTE_URL?>/pages/preguntas" class="nav-link">
                <i class="fas fa-question-circle"></i>
                <span class="nav-link-inner--text">Preguntas</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo ROUTE_URL?>/pages/ubicacion" class="nav-link">
                <i class="fas fa-map-marked-alt"></i>
                <span class="nav-link-inner--text">Ubicación</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo ROUTE_URL?>/pages/contactos" class="nav-link">
                <i class="fas fa-envelope"></i>
                <span class="nav-link-inner--text">Contactos</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.facebook.com/donovanimports/" target="_blank"
                data-toggle="tooltip" title="Siguenos en Facebook!">
                <i class="fab fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
