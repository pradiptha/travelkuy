<?php

include "../php/config.php";

if (isset($_GET['view'])) {
    $view = $_GET['view'];
} else {
    $view = 'Dashboard';
}

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM USER WHERE id_user = '$id'"));
} else {
    header("location: ../index.php");
}

?>


<!DOCTYPE html>
<html>

<head>
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
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="dist/js/pages/dashboard.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
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