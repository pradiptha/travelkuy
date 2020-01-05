<?php

include '../php/config.php';

$sql = "SELECT * FROM checkout";
$data_checkout = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$id_paket = $data_checkout['id_paket'];
$sql_paket = "SELECT * FROM paket WHERE id_paket = '$id_paket'";
$data_paket = mysqli_fetch_assoc(mysqli_query($conn, $sql_paket));
$sql_detail_destinasi = "SELECT * FROM paket 
					INNER JOIN paket_destinasi USING(id_paket)
					INNER JOIN destinasi USING(id_destinasi)
					WHERE id_paket = '$id_paket'";
$detail_destinasi = queryMultiple($sql_detail_destinasi);
$sql_detail_hotel = "SELECT * FROM paket 
					INNER JOIN paket_hotel USING(id_paket)
					INNER JOIN hotel USING(id_hotel)
					WHERE id_paket = '$id_paket'";
$detail_hotel = queryMultiple($sql_detail_hotel);
$detail_paket = array_merge($detail_destinasi, $detail_hotel);
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
		<div class="container bg-white p-4 rounded-lg">
			<div class="row rounded-lg p-2">
				<div class="col-sm-4 uraian">
					<img src="/travelkuy/assets/img/destinasi/bali.jpg" class="img-thumbnail rounded">
				</div>
				<div class="col-sm-8 uraian">
					<h3><?= $data_paket['nama_paket'] ?></h3>
					<p><?= $data_paket['deskripsi'] ?></p>
					<p>Masukan jumlah paket yang ingin dipesan</p>
					<h6 class="durasi-destinasi">2 hari 3 malam</h6>
					<form method="post" action="">
						<div class="hitung">
							<button type="button" value="-" class="btn minus btn-primary btn-sm bg-success float-left" data-field="quantity">-</button>
							<span class="border border-secondary float-left box2">
								<input class="quantity-field" type="number" step="1" max="<?= $simpan['quantity'] ?>" value="1" name="quantity">
							</span>
							<button type="button" value="+" class="btn plus btn-secondary btn-sm bg-success float-left" data-field="quantity">+</button>
						</div>
					</form>
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
							<input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2019">
						</div>
					</div>
				</div>
				<div class="waktu">
					Waktu Keberangkatan :
					<input type="time" name="usr_time">
				</div>
			</div>
			<div class="row row-2 rounded-lg mt-3 p-2">
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
			</div>
			<div class="row row-3">
				<a href="paket.php">
					<button class="btn btn-danger rounded-lg mr-3" type="button">Batalkan</button>
				</a>
				<a href="checkout.php">
					<button class="btn btn-success rounded-lg" type="button">Lanjutkan</button>
				</a>
			</div>
		</div>
	</section>
	<?php layout("footer") ?>
	<?php //include '../nav/footer.php' ?>
</body>

</html>