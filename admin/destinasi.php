
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
  <title>Atur Destinasi</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
  <!-- Google Font: Source Sans Pro -->
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
            <h1>Destinasi Wisata</h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol> -->
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
              <h3 class="card-title">Konfigurasi destinasi Wisata oleh admin</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Destinasi</th>
                  <th>Provinsi Destinasi</th>
                  <th>Alamat Destinasi</th>
                  <th>Durasi Destinasi</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody> 
               <?php
                  $sql = "select destinasi.*, provinces.name from destinasi INNER JOIN provinces ON destinasi.id_provinsi = provinces.id";
                  $result = queryMultiple($sql);
                  foreach($result as $row)
                  {
                     echo "<tr>
                     <td>".$row['nama_destinasi']."</td>
                     <td>".$row['name']."</td>
                     <td>".$row['alamat_destinasi']."</td>
                     <td>".$row['durasi']." jam</td>"
                     ?>
                     <td>
                       <a href="#">
                     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default<?=$row['id_mpaket']?>">
                        Edit Data
                     </button>
                     </a>
                     <a href="/<?= $baseurl ?>/php/edestinasi.php?act=hapus&id=<?=$row['id_destinasi']?>">
                      <button type="button" class="btn btn-danger">
                          hapus
                      </button>
                     </a>
                     </td>
                <?php        
                  }
                  
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Destinasi</th>
                  <th>Provinsi Destinasi</th>
                  <th>Alamat Destinasi</th>
                  <th>Durasi Destinasi</th>
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
         <h4 class="modal-title">Tambah Destinasi Wisata</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <form enctype="multipart/form-data" action="/<?= $baseurl ?>/php/edestinasi.php?act=tambah" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Tempat Wisata</label>
            <input type="text" name="nama_destinasi" class="form-control" placeholder="Nama Destinasi Wisata">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="3" placeholder="Deskripsi Destinasi"></textarea>
          </div>
          <div class="form-group">
            <label>Alamat Wisata</label>
            <input type="text" name="alamat_destinasi" class="form-control" placeholder="Alamat Destinasi Wisata">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Foto Destinasi</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto[]" multiple="multiple" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Pilih Provinsi</label>
            <select class="form-control" data-id="provinsi" name="provinsi">
            <option value="#" selected>Pilih Provinsi</option>
              <?php foreach ($data_provinsi as $provinsi) : ?>
                  <option value="<?= $provinsi['id'] ?>"><?= $provinsi['name'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="number" id="harga_destinasi" name="harga_destinasi" class="form-control" placeholder="Harga Destinasi Wisata">
          </div>
          <div class="form-group">
            <label>Waktu</label>
            <input type="number" id="waktu_destinasi" name="waktu_destinasi" class="form-control" placeholder="Waktu Destinasi">
          </div>
          <!-- <button type="button" class="btn btn-default" onclick="tambah()">Tambah</button> -->
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

<div class="modal fade" id="modal-default<?=$row['id_mpaket']?>">
   <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title">Edit Paket Master</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <form enctype="multipart/form-data" action="/<?= $baseurl ?>/php/mpaket.php?act=edit&id=<?=$row['id_mpaket']?>" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Paket</label>
            <input type="text" id="nama_paket" name="nama_paket" class="form-control" value="<?= $row['nama_mpaket']?>" placeholder="Nama Paket">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="3" placeholder="Deskripsi Paket"><?= $row['deskripsim']?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Foto Paket</label>
            <img src="travelkuy/assets/img/masterpaket/<?=$row['foto_mpaket']?>" alt="">
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label>Pilih Provinsi</label>
            <select class="form-control" data-id="provinsi" name="provinsi">
            <option value="<? $row['id_provinsi']?>" selected><?= $row['name']?></option>
              <?php foreach ($data_provinsi as $provinsi) : ?>
                  <option value="<?= $provinsi['id'] ?>"><?= $provinsi['name'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label>Tambah Tempat Wisata</label>
            <select class="selectpicker form-control" multiple="multiple" name="wisata[]" data-id="wisata" multiple data-live-search="true" required>
                <!-- hasil data dari cari_kota.php akan ditampilkan disini -->
            </select>
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="number" id="harga_paket" name="harga_paket" class="form-control"  placeholder="Harga Paket" value="<?=$row['biaya_mpaket']?>">
          </div>
          <!-- <button type="button" class="btn btn-default" onclick="tambah()">Tambah</button> -->
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="Submit" class="btn btn-primary">Edit data</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>

  // function tambah ()
  // {
  //   let add = document.getElementById("t_tempat");
  //   let div = document.createElement('div');
  //   let select = document.createElement('select');
  //   div.setAttribute('class','form-group');
  //   select.setAttribute('class','form-control');
  //   select.setAttribute('id','wisata');
  //   div.appendChild(select);
  //   add.appendChild(div);

  // }
  // $(function () {
  //   $("#example1").DataTable();
  //   $('#example2').DataTable({
  //     "paging": true,
  //     "lengthChange": false,
  //     "searching": false,
  //     "ordering": true,
  //     "info": true,
  //     "autoWidth": false,
  //   });
  // });
//   $("[data-id='wisata']").selectpicker();
//   $("[data-id='provinsi']").change(function() {

//     // variabel dari nilai combo box provinsi
//     // $('select').selectpicker('refresh');
//     $("[data-id='wisata']").empty();
//     var id_provinsi = $("[data-id='provinsi']").val();

//     // tampilkan image load
//     $("#imgLoad").show("");
//     // mengirim dan mengambil data
//     $.ajax({
//         type: "POST",
//         dataType: "html",
//         url: "cari_destinasi.php",
//         data: "prov=" + id_provinsi,
//         success: function(msg) {

//             // jika tidak ada data
//             if (msg == '') {
//                 $("[data-id='wisata']").selectpicker('refresh');
//                 alert('Tidak ada tempat wisata');
//             }

//             // jika dapat mengambil data,, tampilkan di combo box kota
//             else {
//               $("[data-id='wisata']").html(msg);
//               $("[data-id='wisata']").selectpicker('refresh');
//             }

//             // hilangkan image load
//             $("#imgLoad").hide();
//         }
//     });
//     });
  </script>
</body>
</html>
