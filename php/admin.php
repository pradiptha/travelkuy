<?php

include 'config.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'tambah_slideshow') {
        $error = $_FILES['foto']['error'];
        var_dump($_FILES);
        if ($error === 4) {
            $gambar = "defaultphoto.png";
        } else {
            $namaFile = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];
            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            $namaFileBaru = uniqid();
            $gambar = $namaFileBaru . '.' . $ekstensiGambar;
            if (in_array($ekstensiGambar, $ekstensiGambarValid)) {
                move_uploaded_file($tmp, '../assets/img/slideshow/' . $gambar);
            }
        }

        $link = mysqli_real_escape_string($conn, $_POST['link']);

        $sql = "INSERT INTO master_slideshow(foto,link,status) VALUES ('$gambar','$link','1') ";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['error'] = 0;
            $_SESSION['error_data'] = "Slideshow Berhasil Ditambah";
            header("location: /travelkuy/admin/index.php?view=slideshow");
        } else {
            // echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Slideshow Gagal Ditambah" . mysqli_error($conn);
            header("location: /travelkuy/admin/index.php?view=slideshow");
        }

    } elseif ($act == 'ganti_status_slideshow') {
        $id = $_GET['id'];
        $status = $_GET['s'];
        $query = "UPDATE master_slideshow SET status='$status' WHERE id_slideshow = '$id'";
        mysqli_query($conn, $query);
        header("location: /$baseurl/admin/index.php?view=slideshow");
    } elseif ($act == 'hapus_slideshow') {
        $id = $_GET['id'];
        $query = "DELETE FROM master_slideshow WHERE id_slideshow = '$id'";
        mysqli_query($conn, $query);
        header("location: /$baseurl/admin/index.php?view=slideshow");
    } elseif ($act == 'ganti_status_ph') {
        $id_ph = $_GET['id_ph'];
        $status = $_GET['status'];
        if ($status == 1) {
            mysqli_query($conn, "UPDATE partner_hotel SET status = 0 WHERE id_ph = $id_ph");
        } else {
            mysqli_query($conn, "UPDATE partner_hotel SET status = 1 WHERE id_ph = $id_ph");
        }
        header("location: /$baseurl/admin/index.php?view=validasi");
    }
}