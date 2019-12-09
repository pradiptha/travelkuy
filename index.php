<?php

include "php/config.php";

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
	<link href="./assets/img/brand/fav.png" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
	<link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Argon CSS -->
	<link type="text/css" href="./assets/css/argon.css?v=1.1.0" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/travelkuy/customer/css-home.css">

</head>

<body style="background-color: #E1F5FF">
	<?php include './nav/navbar.php' ?>
	<div class="position-relative">
		<!-- shape Hero -->
		<section class="section section-lg section-shaped pb-250">
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
			<div class="container d-flex">
				<div class="col px-0 mx-auto">
					<div class="row">
						<div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel">
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
									<img src="/travelkuy/assets/img/destinasi/danau-toba.jpg" class="d-block w-100"
										alt="...">
								</div>
								<div class="carousel-item slide-image">
									<img src="/travelkuy/assets/img/destinasi/bali2.jpg" class="d-block w-100"
										alt="...">
								</div>
								<div class="carousel-item slide-image">
									<img src="/travelkuy/assets/img/destinasi/bromo2.png" class="d-block w-100"
										alt="...">
								</div>
								<div class="carousel-item slide-image">
									<img src="/travelkuy/assets/img/destinasi/aceh.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item slide-image">
									<img src="/travelkuy/assets/img/destinasi/wisata-indonesia.jpg"
										class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item slide-image">
									<img src="/travelkuy/assets/img/destinasi/kepulauan-anambas.jpg"
										class="d-block w-100" alt="...">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
								data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
								data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- SVG separator -->
			<div class="separator separator-bottom separator-skew">
				<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
					xmlns="http://www.w3.org/2000/svg">
					<polygon style="fill: #E1F5FF" points="2560 0 2560 100 0 100"></polygon>
				</svg>
			</div>
		</section>
		<!-- 1st Hero Variation -->
	</div>
	<div class="container mt--150">
		<div class="row">
			<div class="col-sm-12">
				<h3 class=" text-white">Destinasi Favorite</h3>
				<!-- <div class="row">
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
				</div> -->
				<div class="row justify-content-center">
				<div class="col-lg-12">
            <div class="row row-grid">
			<?php for ($i=0; $i < 3; $i++) : ?>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0 text-white" style="height: 300px; ">
					<img class="card-img" src="./assets/img/destinasi/aceh.jpg" alt="Card image" style="height: 300px; object-fit: cover;">
					<div class="card-img-overlay" style="z-index:10">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text">Last updated 3 mins ago</p>
					</div>
                </div>
			  </div>
			  <?php endfor ?>
            </div>
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