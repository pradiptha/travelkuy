<?php
include "../php/config.php";

if (isset($_POST['submit'])) {
	// var_dump($_POST);
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user where username='$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);

	$tingkatan = $data["tingkatan"];
	if ($data) {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['id'] = $data['id_user'];
		// echo $tingkatan;
		if ($tingkatan == "0") {
			$_SESSION['type'] = $tingkatan;
			header("location: ../index.php");
		}
		// else if ($tingkatan === "seller") {
		// 	// echo "seller";
		// 	$_SESSION['type'] = $tingkatan;
		// 	header("location: ../seller/index.php");
		// } else if ($tingkatan === "admin") {
		// 	// echo "seller";
		// 	$_SESSION['type'] = $tingkatan;
		// 	header("location: ../admin/daftar-kategori.php");
		// }
	} else { }
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
			<div class="col-sm-5 pt-5 pl-5 pr-5 pb-2 mx-auto bg-white rounded shadow" style="margin-top: 80px;">
				<h3 class="text-center"><strong>LOGIN</strong></h3><br>
				<form method="POST" action="">
					<div class="input-group mb-4">
						<input name="username" type="text" class="form-control rounded-pill btn-outline-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Username">
					</div>
					<div class="input-group mb-5">
						<input name="password" type="password" class="form-control rounded-pill btn-outline-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Password">
					</div>
					<div class="text-center">
						<input name="submit" class="btn btn-primary rounded-pill" type="submit">
					</div>
				</form>
				<div class="text-center">
					<br>
					<p><a href="register.php">Buat Akun</a> | <a href="">Lupa Password</a></p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>