<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  	<meta name="author" content="Creative Tim">
  	<title>TravelKuy - Liburan Biar Santuy</title>
  	<!-- Favicon -->
  	<link href="assets/img/brand/fav.png" rel="icon" type="image/png">
  	<!-- Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  	<!-- Icons -->
  	<link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  	<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  	<!-- Argon CSS -->
  	<link rel="stylesheet" type="text/css" href="">
  	<link type="text/css" href="assets/css/argon.css?v=1.1.0" rel="stylesheet">
  	<!-- DatePicker -->
  	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/> -->
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css"/>
</head>
<body style="background-color: #E1F5FF">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 pt-5 pl-5 pr-5 pb-2 mx-auto bg-white rounded shadow" style="margin-top: 80px;">
				<h3 class="text-center"><strong>DAFTAR AKUN</strong></h3><br>		
				<div class="input-group mb-4">
				  	<input type="text" class="form-control rounded-pill btn-outline-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nama Lengkap">
				</div>
				<div class="form-check form-check-inline pl-5 mb-4">
				  	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Pria">
				  	<label class="form-check-label text-primary" for="inlineRadio1">Pria</label>
					</div>
				<div class="form-check form-check-inline float-right pr-5 mb-4">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Wanita">
				  <label class="form-check-label text-primary" for="inlineRadio2">Wanita</label>
				</div>
				<form action="action">
		            <div class="form-group">
		                <input type="text" name="tanggal" class="tanggal form-control rounded-pill mb-4 btn-outline-primary" placeholder="Tanggal Lahir"/>
		            </div>
		        </form>
		        <script src="assets/vendor/jquery/jquery.min.js"></script>
				<script src="assets/vendor/bootstrap/bootstrap.js"></script>
				<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
				<script type="text/javascript">
				    $(document).ready(function () {
				        $('.tanggal').datepicker({
				            format: "dd-mm-yyyy",
				            autoclose:true
				        });
				    });
				</script>
				<div class="input-group mb-4">
				  	<input type="text" class="form-control rounded-pill btn-outline-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Email">
				</div>
				<div class="input-group mb-5">
				  	<input type="text" class="form-control rounded-pill btn-outline-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="No. Hp">
				</div>
				<div class="mb-4 d-flex justify-content-center">
					<button class="btn btn-primary rounded-pill" type="submit">SUBMIT</button>
				</div>
				<div class="text-center">
					<br><p>Sudah punya akun? <a href="login.php">Login</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>