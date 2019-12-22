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
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Total Booking Room</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="dashboard.php">The Royal Satrian</a></li>
								<li class="breadcrumb-item active">Booking Rooms</li>
							</ol>
						</div><!-- /.col -->
						
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Nama Hotel</th>
											<th>Jumlah Kamar Disewa</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>The Royal Satrian</td>
											<td>7</td>
											<td>
												<a href="" type="button" data-toggle="modal" data-target="#detail">
													[detail]
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
				</div>
			</section>
		</div>

		<!-- modal totalbooking -->
		<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Detail</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="card-body">
								<div class="tab-content">
									<div class="row">
										<div class="col-12">
											<div class="card">
												<div class="card-body">
													<table id="example1" class="table table-bordered table-striped">
														<thead>
															<tr>
																<th>No. Kamar</th>
																<th>Nama Penyewa</th>
																<th>Check-in</th>
																<th>Check-out</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>001</td>
																<td>Echlair Oh</td>
																<td>12/12/2019 12:00</td>
																<td>15/03/2019 13:00</td>
															</tr>
														</tbody>
													</table>
												</div>
												<!-- /.card-body -->
											</div>
											<!-- /.card -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
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