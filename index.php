<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Start your development with a Design System for Bootstrap 4.">
	<meta name="author" content="Creative Tim">
	<title>TravelKuy - Liburan Biar Santuy</title>
	<!-- Favicon -->
	<link href="./assets/img/brand/fav.png" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
	<link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Argon CSS -->
	<link rel="stylesheet" type="text/css" href="css-home.css">
	<link type="text/css" href="./assets/css/argon.css?v=1.1.0" rel="stylesheet">

</head>

<body style="background-color: #E1F5FF">
	<?php include './nav/navbar.php' ?>
	<div class="container ">
		<div class="row">
			<div class="col-sm-12 mx-auto">
				<br /><br />
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					</ol>
					<div class="carousel-inner slide-image h-auto">
						<div class="carousel-item active">
							<img src="/travelkuy/assets/img/destinasi/danau-toba.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item slide-image">
							<img src="/travelkuy/assets/img/destinasi/bali2.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item slide-image">
							<img src="/travelkuy/assets/img/destinasi/bromo2.png" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item slide-image">
							<img src="/travelkuy/assets/img/destinasi/aceh.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item slide-image">
							<img src="/travelkuy/assets/img/destinasi/wisata-indonesia.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item slide-image">
							<img src="/travelkuy/assets/img/destinasi/kepulauan-anambas.jpg" class="d-block w-100" alt="...">
						</div>
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
			</div>
			<div class="col-sm-12">
				<br />
				<h3>Destinasi Favorite</h3>
				<div class="row">
					<div class="col-sm-3 destinasi-fav lokasi">
						<h1 class="text-center font-weight-bold text-white">ACEH</h1>
						<img src="./assets/img/destinasi/aceh.jpg" class="img-thumbnail rounded alt=" ...">
					</div>
					<div class="col-sm-3 destinasi-fav lokasi">
						<h1 class="text-center font-weight-bold text-white">NTB</h1>
						<img src="./assets/img/destinasi/ntb.jpg" class="img-thumbnail rounded" alt="...">
					</div>
					<div class="col-sm-3 destinasi-fav lokasi">
						<h1 class="text-center font-weight-bold text-white">JOGJA</h1>
						<img src="./assets/img/destinasi/jogja.jpg" class="img-thumbnail rounded" alt="...">
					</div>
					<div class="col-sm-3 destinasi-fav lokasi">
						<h1 class="text-center font-weight-bold text-white">BALI</h1>
						<img src="./assets/img/destinasi/bali.jpg" class="img-thumbnail rounded" alt="...">
					</div>
				</div>
			</div>
			<div class="col-sm-12">
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
			</div>
		</div>
	</div>
	</div>

	<?php include './nav/footer.php' ?>

</body>

</html>