<?php

include "../php/config.php";

if ($_SESSION['tingkatan'] != 1) {
    header("location: /$baseurl");
}

if (isset($_GET['view'])) {
    $view = $_GET['view'];
} else {
    $view = 'Dashboard';
}

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $data = queryFetch("SELECT * FROM user INNER JOIN partner_hotel USING(id_user) WHERE id_user='$id'");
    extract($data);
    $username = $data['username'];
    $nama = $data['nama_ph'];
    $email = $data['email'];
    $status = $data['status'];
} else {
    header("location: ../index.php");
}

$sql_provinsi = "SELECT * FROM provinces";
$data_provinsi = queryMultiple($sql_provinsi);

$id_ph = $_SESSION['id_ph'];

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/<?= $baseurl ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/<?= $baseurl ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/<?= $baseurl ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/<?= $baseurl ?>/assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/<?= $baseurl ?>/assets/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/<?= $baseurl ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/<?= $baseurl ?>/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/<?= $baseurl ?>/assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="/<?= $baseurl ?>/assets/img/brand/fav.png" rel="icon" type="image/png">
    <title>Admin Hotel - TravelKuy</title>
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
            <?php
            if (isset($_SESSION['error'])) {
                if ($_SESSION['error'] == 0) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'
                        . $_SESSION['error_data'] . '
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>';
                } elseif ($_SESSION['error'] == 1) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
                        . $_SESSION['error_data'] . '
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>';
                }
            }
            unset($_SESSION['error']);
            unset($_SESSION['error_data']);
            ?>
            <?php include 'content.php' ?>
        </div>

        <!-- Modal -->
        <?php include 'modals.php' ?>


    </div>
    <!-- /.wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="/<?= $baseurl ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/<?= $baseurl ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/<?= $baseurl ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/<?= $baseurl ?>/assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/<?= $baseurl ?>/assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/<?= $baseurl ?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/<?= $baseurl ?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/<?= $baseurl ?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="/<?= $baseurl ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/<?= $baseurl ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/<?= $baseurl ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/<?= $baseurl ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/<?= $baseurl ?>/assets/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="dist/js/pages/dashboard.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="/<?= $baseurl ?>/assets/js/demo.js"></script>
    <script>
        $("#provinsi").change(function() {

            // variabel dari nilai combo box provinsi
            var id_provinsi = $("#provinsi").val();

            // tampilkan image load
            $("#imgLoad").show("");

            // mengirim dan mengambil data
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "cari_kota.php",
                data: "prov=" + id_provinsi,
                success: function(msg) {

                    // jika tidak ada data
                    if (msg == '') {
                        alert('Tidak ada data Kota');
                    }

                    // jika dapat mengambil data,, tampilkan di combo box kota
                    else {
                        $("#kota").html(msg);
                    }

                    // hilangkan image load
                    $("#imgLoad").hide();
                }
            });
        });
        $("#provinsiEdit").change(function() {

            // variabel dari nilai combo box provinsi
            var id_provinsi = $("#provinsiEdit").val();

            // tampilkan image load
            $("#imgLoad").show("");

            // mengirim dan mengambil data
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "cari_kota.php",
                data: "prov=" + id_provinsi,
                success: function(msg) {

                    // jika tidak ada data
                    if (msg == '') {
                        alert('Tidak ada data Kota');
                    }

                    // jika dapat mengambil data,, tampilkan di combo box kota
                    else {
                        $("#kotaEdit").html(msg);
                    }

                    // hilangkan image load
                    $("#imgLoad").hide();
                }
            });
        });
    </script>
</body>

</html>