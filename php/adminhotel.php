<?php

include 'config.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'tambah_hotel') {
        $nama_hotel = mysqli_real_escape_string($conn, $_POST['nama_hotel']);
        $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
        $jumlah_kamar = mysqli_real_escape_string($conn, $_POST['jumlah_kamar']);
        $biaya_hotel = mysqli_real_escape_string($conn, $_POST['biaya_hotel']);
        $provinsi = mysqli_real_escape_string($conn, $_POST['provinsi']);
        $kota = mysqli_real_escape_string($conn, $_POST['kota']);
        $id_ph = $_SESSION['id_ph'];

        $sql = "INSERT INTO hotel(id_ph,nama_hotel,deskripsi_hotel,provinsi,kota,jumlah_kamar,biaya_hotel) VALUES ('$id_ph','$nama_hotel','$deskripsi','$provinsi','$kota','$jumlah_kamar','$biaya_hotel') ";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['error'] = 0;
            $_SESSION['error_data'] = "Hotel Berhasil Ditambah";
            header("location: /travelkuy/adminhotel/");
        } else {
            echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = mysqli_error($conn);
            header("location: /travelkuy/adminhotel/");
        }
    }
}

?>