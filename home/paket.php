<?php
include "../php/config.php";


$slideshows = queryMultiple("SELECT * FROM master_slideshow WHERE status = '1'");

if (isset($_GET)) {
    $t = $_GET['t'];
    $search = $_GET['search'];
    if ($t == 'dp') {
        $title = "Paket Terpopuler di ";
        $title .= ucfirst($search);
    }
}


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
    <link href="/<?= $baseurl ?>/assets/img/brand/fav.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="/<?= $baseurl ?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="/<?= $baseurl ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="/<?= $baseurl ?>/assets/css/argon.min.css?v=1.1.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/<?= $baseurl ?>/assets/css/home.css">

</head>

<body>
    <?php //include "layouts/navbar.php" 
    ?>
    <?php layout("navbar") ?>
    <div class="position-relative">
        <!-- shape Hero -->
        <section class="pt-lg section-shaped">
            <div class="shape shape-style-1 bg-gradient-info shape-default">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title"><?= $title ?></h3>
                <div class="dropdown-divider"></div>
            </div>
        </div>
        <div class="row d-flex justify-content-end">
            <div class="col-md-4 ">
                <div class="form-group">
                    <strong><label for="sort">Urutkan</label></strong>
                    <select id="sort" class="form-control form-control-sm form-control-alternative" style="height: calc(1.5em + 0.5rem + 2px); font-size: 0.875rem;">
                        <option>Terpopuler</option>
                        <option>Termurah</option>
                        <option>Termahal</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dropdown-divider"></div>
                <div class="row row-grid">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="col-md-3">
                            <a href="/travelkuy/customer/paket.php">
                                <div class="card shadow border-0 text-white my-3">
                                    <img src="/<?= $baseurl ?>/assets/img/destinasi/aceh.jpg" alt="Card image" style="width: 100%; object-fit: cover">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>


    </div>
    <?php layout("footer") ?>