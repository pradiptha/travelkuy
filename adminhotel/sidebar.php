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
<body><body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="hotelall.php" class="d-block">Alexander Pierce</a>
					</div>
					<div class="nav-item info">
						<a href="" type="button" data-toggle="modal" data-target="#editprofil">
							<i class="far fa-edit"></i>
						</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item has-treeview menu-open">
							<a href="hotelall.php" class="nav-link active">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									DASHBOARD
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="dashboard.php" class="nav-link active">
										<i class="far fa-circle nav-icon"></i>
										<p>The Royal Santrian</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Jimbaran Bay</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>AYANA Resort Bali</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- modal edit profil-->
		<div class="modal fade" id="editprofil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="card-body">
								<div class="tab-content">
									<form class="form-horizontal">
								<div class="form-group row">
									<label for="inputName" class="col-sm-2 col-form-label">Nama</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="inputName" placeholder="Nama">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputExperience" class="col-sm-2 col-form-label">Telp</label>
									<div class="col-sm-10">
										<input class="form-control" id="inputExperience" placeholder="Telp">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputName2" class="col-sm-2 col-form-label">Foto KTP</label>
									<div class="col-sm-10">
										<input type="file" class="form-control" id="inputGroupFile01">
									</div>
								</div>
							</form>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>