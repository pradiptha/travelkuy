
<?php
include '../php/config.php';

   $sql_provinsi = "SELECT * FROM provinces";
  $data_provinsi = queryMultiple($sql_provinsi);

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
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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
                  <th>Nama Destinasi</th>
                  <th>Alamat Destinasi</th>
                  <th>Biaya</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody> 
               <?php
                  $sql = "select * from destinasi";
                  $result = queryMultiple($sql);
                  foreach($result as $row)
                  {
                     echo "<tr>
                     <td>".$row['nama_destinasi']."</td>
                     <td>".$row['alamat_destinasi']."</td>
                     <td>".$row['biaya_destinasi']."</td>"
                     ?>
                     <td>
                     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                        Edit Data
                     </button>
                     </td>
                <?php        
                  }
                  
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Destinasi</th>
                  <th>Alamat Destinasi</th>
                  <th>Biaya</th>
                  <th> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah Data</button> </th>
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
         <h4 class="modal-title">Tambah Paket Master</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <form action="" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Paket</label>
            <input type="text" id="nama_paket" class="form-control" placeholder="Nama Paket">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" rows="3" placeholder="Deskripsi Paket"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Foto Paket</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Pilih Provinsi</label>
            <select class="form-control" id="provinsi" name="provinsi">
              <?php foreach ($data_provinsi as $provinsi) : ?>
                  <option value="<?= $provinsi['id'] ?>"><?= $provinsi['name'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div id="t_tempat">
            <div class="form-group">
              <label>Tambah Tempat Wisata</label>
              <select class="form-control" name="wisata" id="wisata[]" required>
                  <!-- hasil data dari cari_kota.php akan ditampilkan disini -->
              </select>
            </div>
            <button type="button" class="btn btn-default" onclick="tambah()">Tambah</button>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="Submit" class="btn btn-primary">Tambah data</button>
        </div>
      </form>
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
  // function tambah ()
  // {
  //   let add = document.getElementById("t_tempat");
  //   let select = document.createElement('select');
  //   select.setAttribute('class','form-control');
  //   select.setAttribute('id','wisata[]');
  //   add.appendChild(select);

  // }
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
  $("#provinsi").change(function() {

    // variabel dari nilai combo box provinsi
    var id_provinsi = $("#provinsi").val();

    // tampilkan image load
    $("#imgLoad").show("");

    // mengirim dan mengambil data
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "cari_destinasi.php",
        data: "prov=" + id_provinsi,
        success: function(msg) {

            // jika tidak ada data
            if (msg == '') {
                alert('Tidak ada tempat wisata');
            }

            // jika dapat mengambil data,, tampilkan di combo box kota
            else {
                $("#wisata[]").html(msg);
            }

            // hilangkan image load
            $("#imgLoad").hide();
        }
    });
    });
</script>
</body>
</html>
