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

<body>
	<!-- <div class="container">
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
	</div> -->
	<?php include '../nav/navbar.php' ?>
	<section class="section section-shaped section-lg">
		<div class="shape shape-style-1 bg-gradient-default h-100vh">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="container pt-lg-md">
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="card bg-secondary shadow border-0">
						<div class="card-header bg-white pb-4">
							<div class="text-muted text-center mb-3"><small>Sign in with</small></div>
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
                  <small>Or sign in with credentials</small>
                </div>
                <form class="needs-validation" novalidate method="post">
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
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
                  <div class="custom-control custom-control-alternative custom-checkbox my-4">
                    <input class="custom-control-input" id="customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for="customCheckLogin">
                      <span>Remember me</span>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-2">Sign in</button>
                  </div>
                </form>
              </div>
					</div>
					<div class="row mt-3">
					<div class="col-6">
                <a href="#" class="text-light"><small>Forgot password?</small></a>
              </div>
              <div class="col-6 text-right">
                <a href="register.php" class="text-light"><small>Create new account</small></a>
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