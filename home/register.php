<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
							<!-- <form form class="form-signin" method="post" id="register-form">
								<div class="form-group">
									<div class="input-group input-group-alternative mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
										</div>
										<input name="name" id="name" class="form-control" placeholder="Name" type="text" required>
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
										<input name="email" id="email" class="form-control" placeholder="Email" type="email" required>
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
										<input name="password" name="password" class="form-control" placeholder="Password" type="password" required>
										<div class="invalid-feedback">
											Please provide a valid password.
										</div>
									</div>
								</div>
								<div class="row my-4">
									<div class="col-12">
										<div class="custom-control custom-control-alternative custom-checkbox">
											<input name="privacypolicy" id="privacypolicy" class="custom-control-input" id="customCheckRegister" type="checkbox" required>
											<label class="custom-control-label" for="customCheckRegister"><span>I agree
													with the <a href="#">Privacy Policy</a></span></label>
										</div>
									</div>
								</div>
								<div class="text-center">
									<button type="submit" name="btn-save" id="btn-submit" class="btn btn-primary my-2">Create account</button>
								</div>
							</form> -->
							<form class="form-signin" method="post" id="register-form">

								<!-- <h2 class="form-signin-heading">Sign Up</h2> -->
								<!-- <hr /> -->

								<div id="error">
								</div>
								<div class="form-group">
									<div class="input-group input-group-alternative mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name">
									</div>
									<div class="messageBox1"></div>
								</div>

								<div class="form-group">
									<div class="input-group input-group-alternative mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-email-83"></i></span>
										</div>
										<input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email">
										<span id="check-e"></span>
									</div>
								</div>

								<div class="form-group">
									<div class="input-group input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
										</div>
										<input type="password" class="form-control" placeholder="Password" name="password" id="password">
									</div>
								</div>

								<div class="form-group">
									<div class="input-group input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
										</div>
										<input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword">
									</div>
								</div>
								<hr />

								<div class="form-group text-center">
									<button type="submit" name="btn-save" id="btn-submit" class="btn btn-primary">Create account</button>
									<!-- <button class="btn btn-default w-100" type="submit" name="btn-save" id="btn-submit">
										Create Account
									</button> -->
								</div>

							</form>
						</div>
					</div>
					<div id="result"></div>
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
	<script src="js/jquery.min.js"></script>
	<script src="/travelkuy/assets/vendor/popper/popper.min.js"></script>
	<script src="/travelkuy/assets/vendor/bootstrap/bootstrap.min.js"></script>
	<!-- Theme JS -->
	<!-- <script src="/travelkuy/assets/js/argon.min.js"></script> -->
	<script type="text/javascript" src="/travelkuy/assets/js/jquery.validate.min.js"></script>
	<script>
		$('document').ready(function() {
			/* validation */
			$("#register-form").validate({
				// errorPlacement: function(error, element) {
				// 	error.appendTo(element.parent("input"));
				// },
				rules: {
					user_name: {
						required: true,
						minlength: 3
					},
					user_password: {
						required: true,
						minlength: 8,
						maxlength: 15
					},
					cpassword: {
						required: true,
						equalTo: '#password'
					},
					email: {
						required: true,
						email: true
					},
				},
				messages: {
					user_name: "Enter a Valid Username",
					user_password: {
						required: "Provide a Password",
						minlength: "Password Needs To Be Minimum of 8 Characters"
					},
					email: "Enter a Valid Email",
					cpassword: {
						required: "Retype Your Password",
						equalTo: "Password Mismatch! Retype"
					}
				},
				submitHandler: submitForm
			});
			/* validation */

			/* form submit */
			function submitForm() {
				var data = $("#register-form").serialize();

				$.ajax({

					type: 'POST',
					url: '/travelkuy/php/login.php?act=register',
					data: data,
					beforeSend: function() {
						$("#error").fadeOut();
						$("#btn-submit").html('sending ...');
					},
					success: function(data) {
						if (data == 1) {

							$("#error").fadeIn(1000, function() {

								$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry username or email already taken !</div>');

								$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

							});
							setTimeout('$("#error").fadeOut(1000)', 5000);
						} else if (data == "registered") {
							$("#error").fadeIn(1000, function() {
								$("#error").html('<div class="alert alert-success"> Register Success !</div>');
								$("#btn-submit").html('Signing Up');
							});
							setTimeout('$("#error").fadeOut(1000)', 5000);
							setTimeout('window.location.href = "login.php"', 2000);
						} else {
							$("#error").fadeIn(1000, function() {

								$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; ' + data + ' !</div>');

								$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

							});
							setTimeout('$("#error").fadeOut(1000)', 5000);
						}
					}
				});
				return false;
			}
			/* form submit */

		});
	</script>
</body>

</html>