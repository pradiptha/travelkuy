<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		<?php include 'navbar.php' ?>
		<!-- navbar -->

		<!-- Main Sidebar Container -->
		<?php include 'sidebar.php' ?>
		<!-- sidebar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="modal-body">
						<div class="row">
							<div class="card-body">
								<div class="tab-content">
									<form class="form-horizontal">
										<div class="form-group row">
											<label for="inputName" class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="inputName" placeholder="Name">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="inputEmail" placeholder="Email">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputName2" class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputName2" placeholder="Name">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
											<div class="col-sm-10">
												<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
											</div>
										</div>
										<div class="form-group row">
											<div class="offset-sm-2 col-sm-10">
												<div class="checkbox">
													<label>
														<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="offset-sm-2 col-sm-10">
												<button type="submit" class="btn btn-danger">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-9">
							<!-- general form elements -->
							<div class="card card-primary">
								<div class="col-md-12">
										<div class="card-header p-2">
												<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
											</ul>
										</div><!-- /.card-header -->
										<div class="card-body">
											<div class="tab-content">
												<div class="tab-pane" id="settings">
													<form class="form-horizontal">
														<div class="form-group row">
															<label for="inputName" class="col-sm-2 col-form-label">Name</label>
															<div class="col-sm-10">
																<input type="email" class="form-control" id="inputName" placeholder="Name">
															</div>
														</div>
														<div class="form-group row">
															<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
															<div class="col-sm-10">
																<input type="email" class="form-control" id="inputEmail" placeholder="Email">
															</div>
														</div>
														<div class="form-group row">
															<label for="inputName2" class="col-sm-2 col-form-label">Name</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" id="inputName2" placeholder="Name">
															</div>
														</div>
														<div class="form-group row">
															<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
															<div class="col-sm-10">
																<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
															</div>
														</div>
														<div class="form-group row">
															<label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
															</div>
														</div>
														<div class="form-group row">
															<div class="offset-sm-2 col-sm-10">
																<div class="checkbox">
																	<label>
																		<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group row">
															<div class="offset-sm-2 col-sm-10">
																<button type="submit" class="btn btn-danger">Submit</button>
															</div>
														</div>
													</form>
												</div>
												<!-- /.tab-pane -->
											</div>
											<!-- /.tab-content -->
										</div><!-- /.card-body -->
									<!-- /.nav-tabs-custom -->
								</div>
								<!-- /.col -->
							</div>
						</div>

					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
</div>
</div>
<!-- /.wrapper -->


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/fullcalendar/main.min.js"></script>
<script src="plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="plugins/fullcalendar-interaction/main.min.js"></script>
<script src="plugins/fullcalendar-bootstrap/main.min.js"></script>
<!-- Page specific script -->

</body>
</html>