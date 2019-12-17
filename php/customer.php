<?php

include 'config.php';

if (isset($_GET['act']) && isset($_POST['submit'])) {
    $act = $_GET['act'];
    var_dump($_POST);
} else {
    die();
}

if ($act == 'edit_profile') {
    $nama_lengkap = mysqli_real_escape_string($conn, $_POST['user_full_name']);
    $no_telp = mysqli_real_escape_string($conn, $_POST['user_phone']);
    $alamat = mysqli_real_escape_string($conn, $_POST['user_address']);
    $jenis_kelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
    $id_user = $_SESSION['id'];

    $sql1 = mysqli_query($conn, "UPDATE customer SET
                                nama_customer = '$nama_lengkap',
                                telp_customer = '$no_telp',
                                alamat = '$alamat',
                                jk_customer = '$jenis_kelamin' WHERE id_user = '$id_user' ");
    header("location: /travelkuy/customer/profile.php");
}
