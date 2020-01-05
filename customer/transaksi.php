<?php

include '../php/config.php';

if (isset($_POST['submit'])) {
	$id_paket = $_GET['id'];
	$jumlah = mysqli_real_escape_string($conn, $_POST['quantity']);
	$tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
	$biaya = mysqli_real_escape_string($conn, $_POST['biaya']);
	$total_harga = $biaya * $jumlah;
	$id_user = $_SESSION['id'];
	query("INSERT INTO checkout (id_customer,id_paket,qty_paket,total_harga_paket,waktu_brngkt) VALUES ('$id_user','$id_paket','$jumlah','$total_harga','$tanggal')");
	header("location: buktipembayaran.php");
	// var_dump($detail);
}

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
// var_dump($detail_paket);

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
	<link rel="stylesheet" type="text/css" href="css-detailpaket.css">
	<link type="text/css" href="../assets/css/argon.css?v=1.1.0" rel="stylesheet">
	<script src="../assets/js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
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
	<div class="container bg-white p-4 rounded-lg">
		<form action="" method="POST">
			<div class="row rounded-lg p-2">
				<div class="col-sm-4 uraian">
					<img src="/travelkuy/assets/img/masterpaket/<?= $detail['foto_mpaket'] ?>" class="img-thumbnail rounded">
				</div>
				<div class="col-sm-8 uraian">
					<h2><?= $detail['nama_mpaket'] ?></h2>
					<p><?= $detail['deskripsim'] ?></p>
					<h5><?= $durasi ?> Hari</h5>
					<input name="biaya" type="hidden" value="<?= $detail['biaya_mpaket'] ?>">
					<p>Masukan jumlah paket yang ingin dipesan</p>
					<div class="hitung">
						<span class="border border-secondary float-left box2">
							<input class="quantity-field" type="number" step="1" max="<?= $simpan['quantity'] ?>" value="1" name="quantity">
						</span>
					</div>
				</div>
			</div>
			<div class="row rounded-lg mt-3 p-2">
				<div class="col-sm-12 date">
					<div class="tgl">
						Pilih tanggal dan waktu destinasi
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
							</div>
							<input name="tanggal" class="form-control datepicker" placeholder="Select date" type="text" value="2019-12-12">
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row row-2 rounded-lg mt-3 p-2">
			<table class="edit-destinasi">
				<?php foreach ($detail_paket as $paket) : ?>
					<?php if (isset($paket['nama_destinasi'])) {
						$nama = $paket['nama_destinasi'];
					} else {
						$nama = $paket['nama_hotel'];
					} ?>
					<tr>
						<td><button class="btn"><i class="fa fa-trash"></i></button></td>
						<td><?= $nama ?></td>
					</tr>
				<?php endforeach ?>
			</table>
		</div> -->
			<div class="row rounded-lg mt-3 p-2">
				<div class="col-md-12 align-content-end">
					<a href="/<?= $baseurl ?>/customer/paket.php?id=<?= $id_paket ?>">
						<button class="btn btn-danger rounded-lg mr-3" type="button">Batalkan</button>
					</a>
					<button class="btn btn-success rounded-lg" name="submit" type="submit">Lanjutkan</button>
				</div>
			</div>
		</form>
	</div>
	<?php layout("footer") ?>
	<?php //include '../nav/footer.php' 
	?>
</body>

</html>