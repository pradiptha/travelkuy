<?php
include '../php/config.php';
if (isset($_POST['submit'])) {
	$nama = mysqli_real_escape_string($conn, $_POST['nama']);
	$jeniskelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$telp = mysqli_real_escape_string($conn, $_POST['telp']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$sql = "INSERT INTO user(username,password,email,tingkatan) VALUES ('$username','$password','$email','0') ";
	if (mysqli_query($conn, $sql)) {
		$temp = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1"));
		$number = $temp["id_user"];
		$sql1 = "INSERT INTO customer(id_user,nama_customer,telp_customer,alamat,jk_customer,foto_profil)
				VALUES ('$number','$nama','$telp','$alamat','$jeniskelamin','nophoto.png')";
		if (!mysqli_query($conn, $sql1)) {
			echo ("Error description: " . mysqli_error($conn));
		}
		header("location: login.php");
	} else {
		echo ("Error description: " . mysqli_error($conn));
	}
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
	<link href="../assets/img/brand/fav.png" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
	<link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Argon CSS -->
	<link rel="stylesheet" type="text/css" href="">
	<link type="text/css" href="../assets/css/argon.css?v=1.1.0" rel="stylesheet">
</head>

<body style="background-color: #E1F5FF">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 pt-5 pl-5 pr-5 pb-1 mx-auto bg-white rounded shadow" style="margin-top: 80px;">
				<h3 class="text-center"><strong>DAFTAR AKUN</strong></h3><br>
				<form action="" method="POST">
					<div class="input-group mb-4">
						<input name="nama" type="text" class="form-control rounded-pill btn-outline-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nama Lengkap">
					</div>
					<div class="form-check form-check-inline pl-5 mb-4">
						<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="laki-laki" checked="checked">
						<label class="form-check-label text-primary" for="inlineRadio1">laki-laki</label>
					</div>
					<div class="form-check form-check-inline float-right pr-5 mb-4">
						<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="perempuan">
						<label class="form-check-label text-primary" for="inlineRadio2">perempuan</label>
					</div>
					<div class="input-group mb-4">
						<input name="email" type="text" class="form-control rounded-pill btn-outline-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Email">
					</div>
					<div class="input-group mb-4">
						<input name="telp" type="text" class="form-control rounded-pill btn-outline-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="No. Hp">
					</div>
					<div class="input-group mb-4">
						<input name="username" type="text" class="form-control rounded-pill btn-outline-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
					</div>
					<div class="input-group mb-4">
						<input name="password" type="password" class="form-control rounded-pill btn-outline-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Password">
					</div>
					<div class="form-group mb-5">
						<textarea name="alamat" class="form-control btn-outline-primary" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
					</div>
					<div class="text-center">
						<input name="submit" class="btn btn-primary rounded-pill" type="submit">
					</div>
				</form>
				<div class="text-center">
					<br>
					<p>Sudah punya akun? <a href="login.php">Login</a></p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>