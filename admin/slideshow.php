<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Slideshow</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
    <!-- Navbar -->
    <?php include 'navbar.php' ?>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <?php include 'sidebar.php' ?>
    <!-- sidebar -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Slideshow</li>
              </ol>
            </div>
            <div class="col-sm-6 ">
              <button type="button" class="btn btn-primary float-sm-right btn-sm" data-toggle="modal" data-target="#modaltambah">Tambah</button>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th style="width: 40%">URL Foto</th>
                    <th style="width: 40%">Link</th>
                    <th style="width: 5%" class="text-center">Status</th>
                    <th style="width: 15%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>D01</td>
                      <td>vdger.php</td>
                      <td class="project-state">
                        <div class="dropdown">
                          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Status
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="btn btn-success dropdown-item" type="button">Active</button>
                            <button class="btn btn-danger dropdown-item" type="button">Inactive</button>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div>
                          <div>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaldelete">
                              <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- modal tambah -->
    <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Slideshow</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="index.html" method="post">
              <div class="input-group mb-6">
                <div class="input-group">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="input-group mb-6">
                <input type="text" class="form-control" placeholder="Link">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-link"></i></span>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal tambah -->
    <!-- modal delete -->
    <div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">       
            <h4 class="modal-title">Are you sure?</h4>  
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <p>Do you really want to delete these picture?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal delete -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
</body>
</html>