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
	<link type="text/css" href="assets/css/argon.css?v=1.1.0" rel="stylesheet">
	<script src="../assets/js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include '../nav/navbar.php' ?>
	<div class="container">
		<br>
		<div class="row">
			<div class="col-sm-4 uraian">
				<img src="../assets/img/icons/bali.jpg" class="img-thumbnail rounded">
			</div>
			<div class="col-sm-8 uraian">
				<h3>WISATA ALAM BALI</h3>
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
		<div class="row">
			<div class="col-sm-12 date">
				<div class="tgl">
					Pilih tanggal dan waktu destinasi	
				</div>
				<div class="date">
					<div class="input-daterange datepicker row align-items-center">
					    <div class="col">
					        <div class="form-group">
					            <div class="input-group input-group-alternative">
					                <div class="input-group-prepend">
					                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
					                </div>
					                <input class="form-control" placeholder="Start date" type="text" value="06/18/2019">
					            </div>
					        </div>
					    </div>
					    <div class="col">
					        <div class="form-group">
					            <div class="input-group input-group-alternative">
					                <div class="input-group-prepend">
					                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
					                </div>
					                <input class="form-control" placeholder="End date" type="text" value="06/22/2019">
					            </div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
			<div class="waktu">
				Waktu Keberangkatan :
				 	<input type="time" name="usr_time">
			</div>
		</div>	
		<div class="row row-2">
			<table class="edit-destinasi">
				<tr>
					<td><button class="btn"><i class="fa fa-trash"></i></button></td>
					<td>Destinasi a</td>
				</tr>
				<tr>
					<td><button class="btn"><i class="fa fa-trash"></i></button></td>
					<td>Destinasi b</td>
				</tr>
				<tr>
					<td><button class="btn"><i class="fa fa-trash"></i></button></td>
					<td>Destinasi c</td>
				</tr>
			</table>
		</div>
		<div class="row row-3">
			<button class="btn btn-danger">Batalkan</button>
			<button class="btn btn-success">Lanjutkan</button>
		</div>
	</div>
	<?php include '../nav/footer.php' ?> 
</body>
</html>