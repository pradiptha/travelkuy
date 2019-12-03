<?php

// include "./php/config.php";

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
</head>

<body style="background-color: #E1F5FF">
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-info pt-1 pb-1">
        <div class="container">
            <a class="navbar-brand" href="/travelkuy/">
                <img src="/travelkuy/assets/img/icons/logo1.png" height="50" alt="" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-default">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="/travelkuy/index.html">
                                <img alt="image" src="/travelkuy/assets/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav ml-lg-auto">
                    <?php if (isset($_SESSION['username'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="ni ni-spaceship"></i>
                                <span class="nav-link-inner--text d-lg-none">Discover</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ni ni-circle-08"></i>
                                <span class="nav-link-inner--text d-lg-none">Settings</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                                <a class="dropdown-item" href="/travelkuy/customer/profile.php"><img src="/travelKuy/assets/img/theme/kucing.jpg" class="rounded-circle mr-2" alt="image" style="width : 30px; height :30px;"><?= $_SESSION['username'] ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/travelkuy/customer/histori.php"><i class="ni ni-calendar-grid-58"></i>Histori</a>
                                <a class="dropdown-item" href="/travelkuy/customer/editprofil.php"><i class="ni ni-badge"></i>Edit Profil</a>
                                <a class="dropdown-item" href="/travelkuy/customer/editemail.php"><i class="ni ni-ui-04"></i>Ubah Email</a>
                                <a class="dropdown-item" href="/travelkuy/customer/editpassword.php"><i class="ni ni-key-25"></i>Ubah Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/travelkuy/php/logout.php"><i class="ni ni-button-power"></i>Logout</a>
                            </div>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/travelkuy/home/login.php">
                                LOGIN
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/travelkuy/home/register.php">
                                REGISTER
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>