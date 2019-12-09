<?php
include '../php/config.php';
if (isset($_POST['submit'])) {
	var_dump($_POST);
	// $nama = mysqli_real_escape_string($conn, $_POST['nama']);
	// $jeniskelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
	// $email = mysqli_real_escape_string($conn, $_POST['email']);
	// $alamat = htmlspecialchars($_POST['alamat']);
	// $telp = mysqli_real_escape_string($conn, $_POST['telp']);
	// $username = mysqli_real_escape_string($conn, $_POST['username']);
	// $password = mysqli_real_escape_string($conn, $_POST['password']);

	// $sql = "INSERT INTO user(username,password,email,tingkatan) VALUES ('$username','$password','$email','0') ";
	// if (mysqli_query($conn, $sql)) {
	// 	$temp = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1"));
	// 	$number = $temp["id_user"];
	// 	$sql1 = "INSERT INTO customer(id_user,nama_customer,telp_customer,alamat,jk_customer,foto_profil)
	// 			VALUES ('$number','$nama','$telp','$alamat','$jeniskelamin','nophoto.png')";
	// 	if (!mysqli_query($conn, $sql1)) {
	// 		echo ("Error description: " . mysqli_error($conn));
	// 	}
	// 	header("location: login.php");
	// } else {
	// 	echo ("Error description: " . mysqli_error($conn));
	// }
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

<body>
	<?php include '../nav/navbar.php' ?>
	<!-- <div class="container">
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
	</div> -->
	<section class="section section-shaped section-lg">
		<div class="shape shape-style-1 bg-gradient-default min-vh-100">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="container pt-lg-2">
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="card bg-secondary shadow border-0">
						<div class="card-header bg-white pb-4">
							<div class="text-muted text-center mb-3"><small>Sign up with</small></div>
							<div class="text-center">
								<!-- <a href="#" class="btn btn-neutral btn-icon mr-4">
                    <span class="btn-inner--icon">
                      <img src="../assets/img/icons/common/github.svg" alt="image">
                    </span>
                    <span class="btn-inner--text">Github</span>
                  </a> -->
								<a href="#" class="btn btn-neutral btn-icon">
									<span class="btn-inner--icon">
										<img src="../assets/img/icons/common/google.svg" alt="image">
									</span>
									<span class="btn-inner--text">Google</span>
								</a>
							</div>
						</div>
						<div class="card-body px-lg-5 py-lg-3">
							<div class="text-center text-muted mb-4">
								<small>Or sign up with credentials</small>
							</div>
							<form class="needs-validation" novalidate method="post">
								<div class="form-group">
									<div class="input-group input-group-alternative mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
										</div>
										<input name="name" class="form-control" placeholder="Name" type="text" required>
										<div class="invalid-feedback">
										Please provide a valid name.
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group input-group-alternative mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-email-83"></i></span>
										</div>
										<input name="email" class="form-control" placeholder="Email" type="email" required>
										<div class="invalid-feedback">
										Please provide a valid email.
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
										</div>
										<input name="password" class="form-control" placeholder="Password" type="password" required>
										<div class="invalid-feedback">
										Please provide a valid password.
										</div>
									</div>
								</div>
								<!-- <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div> -->
								<div class="row my-4">
									<div class="col-12">
										<div class="custom-control custom-control-alternative custom-checkbox">
											<input name="privacypolicy" class="custom-control-input" id="customCheckRegister"
												type="checkbox" required>
											<label class="custom-control-label" for="customCheckRegister"><span>I agree
													with the <a href="#">Privacy Policy</a></span></label>
										</div>
									</div>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-primary my-2">Create account</button>
								</div>
							</form>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12 text-right">
							<a href="login.php" class="text-light"><small>Already Have an Account?</small></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Core -->
	<script src="/travelkuy/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/travelkuy/assets/vendor/popper/popper.min.js"></script>
  <script src="/travelkuy/assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- Theme JS -->
  <script src="/travelkuy/assets/js/argon.min.js"></script>

	<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>

</html>