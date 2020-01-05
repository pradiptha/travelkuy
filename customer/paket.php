<?php
include "../php/config.php";

if (isset($_GET['id'])) {
	$id_paket = $_GET['id'];
	$detail = queryFetch("SELECT * FROM paket_master WHERE id_mpaket = '$id_paket'");
	$destinasi = queryMultiple("SELECT * FROM paket_destinasi INNER JOIN destinasi USING(id_destinasi) INNER JOIN foto_destinasi USING(id_destinasi) WHERE id_paket = '$id_paket'");
	$durasi_total = 0;
	foreach ($destinasi as $key) {
		$durasi_total += $key['durasi'];
	}
	$durasi = round($durasi_total / 8);
}

?>

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
	<!-- <link rel="stylesheet" type="text/css" href="css-paket.css"> -->
	<link type="text/css" href="../assets/css/argon.css?v=1.1.0" rel="stylesheet">
</head>

<body>
	<?php layout("navbar") ?>
	<?php //include '../nav/navbar.php' 
	?>
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
		</section>
	</div>
	<div class="container bg-white rounded-lg p-4">
		<div class="row rounded-lg">
			<div class="col-sm-4 destinasi-uraian">
				<img src="/travelkuy/assets/img/masterpaket/<?= $detail['foto_mpaket'] ?>" class="img-thumbnail rounded">
			</div>
			<div class="col-sm-8 destinasi-uraian">
				<div class="destinasi">
					<h2><?= $detail['nama_mpaket'] ?></h2>
				</div>
				<div class="destinasi">
					<p><?= $detail['deskripsim'] ?></p>
				</div>
				<div class="destinasi">
					<h5><?= $durasi ?> Hari</h5>
					<h1 class="biaya-destinasi">Rp <?= $detail['biaya_mpaket'] ?></h1>
				</div>
				<a href="transaksi.php?id=<?= $id_paket ?>">
					<button class="btn btn-1 btn-primary m-4 rounded-pill" type="button">Pesan Sekarang</button>
				</a>

			</div>
		</div>
		<br>
		<div class="row rounded-lg">
			<div class="col-md-12">
				<div class="dropdown-divider"></div>
				<h4>Detail Paket</h4>
				<?php foreach ($destinasi as $detail_destinasi) : ?>
					<div class="card mb-3">
						<div class="row no-gutters">
							<div class="col-md-4" style="height: 200px; ">
								<img src="/<?= $baseurl ?>/assets/img/destinasi/<?= $detail_destinasi['foto_destinasi'] ?>" class="card-img" alt="..." style="height: 100%; width: 100%; object-fit: cover">
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title"><?= $detail_destinasi['nama_destinasi'] ?></h5>
									<p class="card-text mt-n1" style="line-height: normal"><?php echo substr($detail_destinasi['deskripsi_destinasi'],0,200) ?></p>
									<p class="card-text mb-n1"><small class="text-muted">Durasi: <?= $detail_destinasi['durasi'] ?> Jam</small></p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

	<?php layout("footer") ?>
	<?php //include '../nav/footer.php' 
	?>
</body>

</html>