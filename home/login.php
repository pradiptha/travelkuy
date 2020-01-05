<?php
include "../php/config.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Start your development with a Design System for Bootstrap 4.">
	<meta name="author" content="Creative Tim">
	<title><?= $title ?> - TravelKuy</title>
	<!-- Favicon -->
	<link href="/<?= $baseurl ?>/assets/img/brand/fav.png" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="/<?= $baseurl ?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
	<link href="/<?= $baseurl ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Argon CSS -->
	<link type="text/css" href="/<?= $baseurl ?>/assets/css/argon.min.css?v=1.1.0" rel="stylesheet">
</head>

<body>
	<?php layout("navbar") ?>
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
							<form class="form-signin" method="post" id="login-form">
								<div id="error">
								</div>
								<div class="form-group">
									<div class="input-group input-group-alternative mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name">
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
								<hr />

								<div class="form-group text-center">
									<button type="submit" name="btn-save" id="btn-submit" class="btn btn-primary">Sign In</button>
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
	<script src="/<?= $baseurl ?>/assets/vendor/jquery/jquery.min.js"></script>
	<script src="/<?= $baseurl ?>/assets/vendor/popper/popper.min.js"></script>
	<script src="/<?= $baseurl ?>/assets/vendor/bootstrap/bootstrap.min.js"></script>
	<!-- Theme JS -->
	<!-- <script src="/<?= $baseurl ?>/assets/js/argon.min.js"></script> -->
	<script type="text/javascript" src="/<?= $baseurl ?>/assets/js/jquery.validate.min.js"></script>
	<script>
		$('document').ready(function() {
			/* validation */
			$("#login-form").validate({
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
				},
				messages: {
					user_name: "Enter a Valid Username",
					user_password: {
						required: "Provide a Password",
						minlength: "Password Needs To Be Minimum of 8 Characters"
					},
				},
				submitHandler: submitForm
			});
			/* validation */

			/* form submit */
			function submitForm() {
				var data = $("#login-form").serialize();

				$.ajax({

					type: 'POST',
					url: '/travelkuy/php/login.php?act=login',
					data: data,
					beforeSend: function() {
						$("#error").fadeOut();
						$("#btn-submit").html('sending ...');
					},
					success: function(data) {
						if (data == "error1") {
							$("#error").fadeIn(1000, function() {
								$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry username doesn\'t match !</div>');
								$("#btn-submit").html('Sign In');
							});
							setTimeout('$("#error").fadeOut(1000)', 5000);
						} else if (data == "error2") {
							$("#error").fadeIn(1000, function() {
								$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry password doesn\'t match !</div>');
								$("#btn-submit").html('Sign In');
							});
							setTimeout('$("#error").fadeOut(1000)', 5000);
						} else {
							$("#error").fadeOut();
							$("#error").fadeIn(1000, function() {
								$("#error").html('<div class="alert alert-success"> Login Success !</div>');
								$("#btn-submit").html('Sign In');
								$("#btn-submit").html('Redirecting...');
							});
							setTimeout('$("#error").fadeOut(1000)', 5000);
							if (data == 0) {
								setTimeout('window.location.href = "/travelkuy/"', 2000);
							} else if (data == 1) {
								setTimeout('window.location.href = "/travelkuy/adminhotel/"', 2000);
							} else if (data == 2) {
								setTimeout('window.location.href = "/travelkuy/admin"', 2000);
							}
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