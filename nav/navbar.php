<?php
  include "./php/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>TravelKuy - Liburan Biar Santuy</title>
    <!-- Favicon -->
    <link href="/travelkuy/assets/img/brand/fav.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="/travelkuy/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="/travelkuy/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="/travelkuy/assets/css/argon.css?v=1.1.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/travelkuy/customer/css-home.css">
    <!-- Js -->
    <script src="/travelkuy/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/travelkuy/assets/vendor/popper/popper.min.js"></script>
    <script src="/travelkuy/assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="/travelkuy/assets/vendor/headroom/headroom.min.js"></script>
    <!-- Theme JS -->
    <script src="/travelkuy/assets/js/argon.min.js"></script>

    <style type="text/css">
      .headroom
      {
        padding-top : .5rem;
        padding-bottom : .5rem;
        background-color:#11cdef;
      }
    </style>
</head>

<body style="background-color: #E1F5FF">
<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="/travelkuy/">
          <img src="/travelkuy/assets/img/icons/logo1.png" alt="brand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
              <a class="navbar-brand mr-lg-5" href="/travelkuy/">
                <img src="/travelkuy/assets/img/icons/logo.png" alt="brand">
              </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <?php if (isset($_SESSION['username'])) : ?>
              <li class="nav">
                  <a href="#" class="nav-link"  role="button">
                    <i class="ni ni-spaceship"></i>
                    <span class="nav-link-inner--text d-lg-none">Discover</span>
                  </a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                  <i class="ni ni-collection d-lg-none"></i>
                  <span class="nav-link-inner--text"><?= $_SESSION['username'] ?></span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/travelkuy/customer/histori.php"><i class="ni ni-calendar-grid-58"></i>Histori</a>
                    <a class="dropdown-item" href="/travelkuy/customer/editprofil.php"><i class="ni ni-badge"></i>Edit Profil</a>
                    <a class="dropdown-item" href="/travelkuy/customer/editemail.php"><i class="ni ni-ui-04"></i>Ubah Email</a>
                    <a class="dropdown-item" href="/travelkuy/customer/editpassword.php"><i class="ni ni-key-25"></i>Ubah Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/travelkuy/php/logout.php"><i class="ni ni-button-power"></i>Logout</a>
                </div>
              </li>
            <?php else : ?>
              <li class="nav">
                  <a href="/travelkuy/home/login.php" class="nav-link"  role="button">
                    <i class="ni ni-ui-04 d-lg-none"></i>
                    <span class="nav-link-inner--text">Login</span>
                  </a>
              </li>
              <li class="nav">
                  <a href="/travelkuy/home/register.php" class="nav-link"  role="button">
                    <i class="ni ni-ui-04 d-lg-none"></i>
                    <span class="nav-link-inner--text">Register</span>
                  </a>
              </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
