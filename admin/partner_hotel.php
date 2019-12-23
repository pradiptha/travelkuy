
<?php
include '../php/config.php';

   if(isset($_GET['id'])) {
      $id_ph = $_GET['id'];
      $status = $_GET['status'];
      if($status==1)
      {
         mysqli_query($conn,"UPDATE partner_hotel SET status = 0 WHERE id_ph = $id_ph");            
      }
      else{
         mysqli_query($conn,"UPDATE partner_hotel SET status = 1 WHERE id_ph = $id_ph");
      }
   }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Partner</th>
                  <th>Berkas</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody> 
               <?php
                  $sql = "select * from partner_hotel";
                  $result = queryMultiple($sql);
                  // $partner_hotel = mysqli_query($conn,"select * from partner_hotel");
                  foreach($result as $row)
                  {
                     echo "<tr>
                     <td>".$row['nama_ph']."</td>"?>
                     <td>
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
                        Lihat Berkas
                     </button>
                     </td>
                     <?php
                     if($row['status']==1)
                     {?>
                    <td>
                        <a href="partner_hotel.php?<?php echo"id=".$row['id_ph']."&status=".$row['status']; ?>">
                           <button type="button" class="btn  btn-primary">Active</button>
                        </a>
                     </td>
                     <?php }
                     else
                     {
                     ?>
                     <td>
                     <a href="partner_hotel.php?<?php echo"id=".$row['id_ph']."&status=".$row['status']; ?>">
                           <button type="button" class="btn  btn-danger">Tidak Active</button>
                        </a>
                     </td>
                     </tr>
                     <?php
                     }
                        
                  }
                  
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Partner</th>
                  <th>Berkas</th>
                  <th>Status</th>
                </tr>
                </tfoot>
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Berkas Dilampirkan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <p>Foto KTP</p>
               <p><?=$row['nama_ph'];?></p>
               <img class="img-fluid pad" src="dist/img/photo2.png" alt="">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>

