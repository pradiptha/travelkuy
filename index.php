<?php
include "php/config.php";


$slideshows = queryMultiple("SELECT * FROM master_slideshow WHERE status = '1'");


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
	<?php layout("navbar")	?>
	<div class="position-relative">
		<!-- shape Hero -->
		<section class="pt-lg section-shaped">
			<div class="shape shape-style-1 bg-gradient-info shape-default">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php $first_slide = array_pop($slideshows); ?>
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<?php $i = 1;
					foreach ($slideshows as $slideshow) : ?>
						<li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>"></li>
					<?php $i++;
					endforeach;
					?>
				</ol>
				<div class="carousel-inner slide-image active h-auto w-100">
					<div class="carousel-item slide-image active">
						<img src="/travelkuy/assets/img/slideshow/<?= $first_slide['foto'] ?>" class="d-block" alt="..." style="width: 100%; object-fit: cover">
						<div class="carousel-caption d-none d-md-block text-white" style="background-color: rgba(0, 0, 0, 50%)">
							<h3 class="slider-font text-white text-bold">Travelkuy</h3>
							<p class="slider-font-sub">Skuy Traveling</p>
						</div>
					</div>
					<?php foreach ($slideshows as $slideshow) : ?>
						<div class="carousel-item slide-image">
							<img src="/travelkuy/assets/img/slideshow/<?= $slideshow['foto'] ?>" class="d-block" alt="..." style="width: 100%; object-fit: cover">
							<div class="carousel-caption d-none d-md-block text-white " style="background-color: rgba(0, 0, 0, 50%)">
								<h3 class=" slider-font text-white text-bold">Travelkuy</h3>
								<p class="slider-font-sub">Skuy Traveling</p>
							</div>
						</div>
					<?php endforeach ?>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
		<!-- 1st Hero Variation -->
	</div>
	<section class="section-lg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h3 class="">Destinasi Terpopuler</h3>
				</div>
				<div class="col-sm-6">
					<a href="/<?= $baseurl ?>/home/paket.php" class="float-sm-right my-3">SELENGKAPNYA</a>
				</div>
			</div>
			<div class="row row-grid">
				<?php for ($i = 0; $i < 10; $i++) : ?>
					<div class="col-md-3">
						<a href="/travelkuy/customer/paket.php">
							<div class="card card-lift--hover shadow border-0 text-white my-3" style="height: 200px; ">
								<img class="card-img" src="./assets/img/destinasi/aceh.jpg" alt="Card image" style="height: 100%; width: 100%; object-fit: cover">
								<div class="card-img-overlay" style="z-index:10">
									<h5 class="card-title font-weight-bold text-white">Card title</h5>
									<p class="card-text">Last updated 3 mins ago</p>
								</div>
							</div>
						</a>
					</div>
				<?php endfor ?>
			</div>
			<!-- <div class="col-sm-12">
				<br /><br />
				<h3>Paket Liburan Favorite</h3>
				<div class="row">
					<div class="col-sm-4 liburan-fav lokasi rounded-bottom">
						<div class="rounded-right bg-info price">
							<h5 class="text-center font-weight-bold">IDR 7500000</h5>
						</div>
						<div class="rounded-left bg-danger lama">
							<p class="text-center font-weight-bold">3HARI<br>2Malam</p>
						</div>
						<img src="./assets/img/destinasi/papua.jpg" class="img-thumbnail rounded-top" alt="...">
						<h6 class="font-weight-bold bg-white text-center">RAJA AMPAT DREAMLAND</h6>
					</div>
					<div class="col-sm-4 liburan-fav lokasi rounded-bottom">
						<div class="rounded-right bg-info price">
							<h5 class="text-center font-weight-bold">IDR 2500000</h5>
						</div>
						<div class="rounded-left bg-danger lama">
							<p class="text-center font-weight-bold">3HARI<br>2Malam</p>
						</div>
						<img src="./assets/img/destinasi/bromo2.png" class="img-thumbnail rounded-top" alt="...">
						<h6 class="font-weight-bold bg-white text-center">WISATA BROMO</h6>
					</div>
					<a href="/travelkuy/customer/paket.php" class="col-sm-4 liburan-fav lokasi rounded-bottom">
						<div class="rounded-right bg-info price">
							<h5 class="text-center font-weight-bold">IDR 3500000</h5>
						</div>
						<div class="rounded-left bg-danger lama">
							<p class="text-center font-weight-bold">3HARI<br>2Malam</p>
						</div>
						<img src="./assets/img/destinasi/bali2.jpg" class="img-thumbnail rounded-top" alt="...">
						<h6 class="font-weight-bold bg-white text-center">WISATA ALAM BALI</h6>
						<br /><br />
					</a>

				</div>
			</div> -->
		</div>
	</section>

	<div class="container-fluid bg-gradient-info py-5 my-5">
		<div class="container text-center text-white">
			<h2 class="text-white">Cari destinasi dan paket liburanmu disini</h2>
			<p>Nikmati kemudahan mencari paket liburan di Travelkuy</p>
			<form action="" method="GET">
				<div class="form-group">
					<div class="input-group input-group-alternative mb-4">
						<input name="search" type="text" autocomplete="off" class="form-control" placeholder="Ketik destinasi, paket liburanmu disini" aria-label="search" aria-describedby="button-addon2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<section class="section-lg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h3 class="">Paket Terpopuler</h3>
				</div>
				<div class="col-sm-6">
					<a href="" class="float-sm-right my-3">SELENGKAPNYA</a>
				</div>
			</div>
			<div class="row row-grid">
				<?php for ($i = 0; $i < 8; $i++) : ?>
					<div class="col-md-3">
						<a href="/travelkuy/customer/paket.php">
							<div class="card card-lift--hover shadow border-0 text-white my-3" style="height: 200px; ">
								<img class="card-img" src="./assets/img/destinasi/aceh.jpg" alt="Card image" style="height: 100%; width: 100%; object-fit: cover">
								<div class="card-img-overlay" style="z-index:10">
									<h5 class="card-title font-weight-bold text-white">Card title</h5>
									<p class="card-text">Last updated 3 mins ago</p>
								</div>
							</div>
						</a>
					</div>
				<?php endfor ?>
			</div>
		</div>
	</section>

	<section class="section-lg mb-lg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h3 class="">Paket Terbaru</h3>
				</div>
				<div class="col-sm-6">
					<a href="" class="float-sm-right my-3">SELENGKAPNYA</a>
				</div>
			</div>
			<div class="row row-grid">
				<?php for ($i = 0; $i < 8; $i++) : ?>
					<div class="col-md-3">
						<a href="/travelkuy/customer/paket.php">
							<div class="card card-lift--hover shadow border-0 text-white my-3" style="height: 200px; ">
								<img class="card-img" src="./assets/img/destinasi/aceh.jpg" alt="Card image" style="height: 100%; width: 100%; object-fit: cover">
								<div class="card-img-overlay" style="z-index:10">
									<h5 class="card-title font-weight-bold text-white">Card title</h5>
									<p class="card-text">Last updated 3 mins ago</p>
								</div>
							</div>
						</a>
					</div>
				<?php endfor ?>
			</div>
		</div>
	</section>
	<?php layout("footer")	?>