<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Start your development with a Design System for Bootstrap 4.">
	<meta name="author" content="Creative Tim">
	<title>TravelKuy - Liburan Biar Santuy</title>
	<!-- Favicon -->
	<link href="../assets/img/brand/logo-01.png" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
	<link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Argon CSS -->
	<link rel="stylesheet" type="text/css" href="css-paket.css">
	<link type="text/css" href="../assets/css/argon.css?v=1.1.0" rel="stylesheet">
</head>

<body style="background-color: #E1F5FF;">
	<?php include '../nav/navbar.php' ?>
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
			<div class="container">
				<div class="row rounded-lg">
					<div class="col-sm-4 destinasi-uraian">
						<img src="/travelkuy/assets/img/destinasi/bali.jpg" class="img-thumbnail rounded">
					</div>
					<div class="col-sm-8 destinasi-uraian">
						<div class="destinasi">
							<h2>WISATA ALAM BALI</h2>
						</div>
						<div class="destinasi">
							<p>Paket wisata alam yang memanjakan Anda mengelilingi bali, melihat bali, dari sudut pandang keindahan alamnya</p>
						</div>
						<div class="destinasi">
							<h5>3 Hari 2 Malam</h5>
							<h1 class="biaya-destinasi">Rp 2.500.000</h1>
						</div>
						<a href="detailpaket.php">
							<button class="btn btn-1 btn-primary m-4 rounded-pill" type="button">Pesan Sekarang</button>
						</a>

					</div>
				</div>
				<br>
				<div class="row rounded-lg">
				<div class="nav-wrapper p-3">
					<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
						<li class="nav-item">
							<a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Deskripsi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Dokumentasi</a>
						</li>
					</ul>
				</div>
				<div class="card shadow">
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
								<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
							</div>
							<div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
								<img src="../assets/img/destinasi/aceh.jpg" class="rounded" alt="...">
								<img src="../assets/img/destinasi/aceh.jpg" class="rounded" alt="...">
								<img src="../assets/img/destinasi/aceh.jpg" class="rounded" alt="...">
							</div>
						</div>
					</div>
				</div>


					<!-- <div class="col-xs-6 col-md-8 deskripsi-destinasi">
						<div class="btn_desk">
							<button class="btn btn-2 btn-primary" disabled type="button">Deskripsi</button>
						</div>
						<div class="penjabaran">
							<p>Paket wisata alam Bali terbagi menjadi beberapa destinasi dan tempat peristirahatan. Adapun fasilitas yang didapat, yaitu</p>
							<ul>
								<li>Destinasi wisata a</li>
								<li>Destinasi wisata b</li>
								<li>Destinasi wisata b</li>
								<li>Penginapan hotel a</li>
							</ul>
						</div>
					</div> -->
				</div>
			</div>
  	</section>

	
	<?php include '../nav/footer.php' ?>
</body>

</html>