<?php

include 'config.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'tambah') {
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
                move_uploaded_file($tmp, '../assets/img/masterpaket/' . $gambar);
            }
        }


        $nama_paket = mysqli_real_escape_string($conn, $_POST['nama_paket']);
        $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
        $biaya_paket = mysqli_real_escape_string($conn, $_POST['harga_paket']);
        $provinsi = mysqli_real_escape_string($conn, $_POST['provinsi']);
        $sql = "INSERT INTO paket_master(id_provinsi,nama_mpaket,deskripsim,foto_mpaket,biaya_mpaket) VALUES ('$provinsi','$nama_paket','$deskripsi','$gambar','$biaya_paket') ";
        

        if (mysqli_query($conn, $sql)) {
            $id_mpaket = mysqli_insert_id($conn);
            foreach ($_POST['wisata'] as $destinasi){  
                echo $destinasi; 
                $sql1 = "INSERT INTO paket_destinasi(id_paket, id_destinasi, type_paket) VALUES ('$id_mpaket', '$destinasi',1)";
                $hasil = mysqli_query($conn, $sql1);
                $_SESSION['error'] = 0;
                $_SESSION['error_data'] = "Paket Berhasil Ditambah";  
            }
            header("location: /travelkuy/admin/default_package.php");
        } else {
            // echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Paket Gagal Ditambah";
            header("location: /travelkuy/admin/default_package.php");
        }
        
    } elseif ($act == 'hapus') {
        $id = $_GET['id'];
        $sql = "DELETE FROM paket_master where id_mpaket = '$id'";
        if(mysqli_query($conn, $sql)){
            $sql1 = "DELETE FROM paket_destinasi where id_paket = '$id' and type_paket = 1 ";
            $hasil = mysqli_query($conn,$sql1);
            $_SESSION['error'] = 0;
            $_SESSION['error_data'] = "Hotel Berhasil Dihapus";
            header("location: /travelkuy/admin/default_package.php");
        } else {
            // echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Hotel Gagal Dihapus";
            header("location: /travelkuy/admin/default_package.php");
        }

    } elseif ($act == 'edit') {
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
            var_dump($ekstensiGambar);
            if (in_array($ekstensiGambar, $ekstensiGambarValid)) {
                move_uploaded_file($tmp, '../assets/img/masterpaket/' . $gambar);
            }
        }

        $nama_paket = mysqli_real_escape_string($conn, $_POST['nama_paket']);
        $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
        $biaya_paket = mysqli_real_escape_string($conn, $_POST['harga_paket']);
        $provinsi = mysqli_real_escape_string($conn, $_POST['provinsi']);
        $id = $_GET['id'];
        $sql = "UPDATE paket_destinasi SET id_provinsi = '$provinsi',
                            nama_mpaket = '$nama_paket', 
                            deskripsi_hotel = '$deskripsi', 
                            foto_mpaket = '$gambar', 
                            biaya_mpaket = '$biaya_paket' WHERE id_mpaket = '$id'";
        if (mysqli_query($conn, $sql)) {
            $sql1 = "UPDATE foto_hotel SET id_hotel = '$id', foto_hotel = '$gambar'";
            $result = mysqli_query($conn, $sql1);
            $_SESSION['error'] = 0;
            $_SESSION['error_data'] = "Hotel Berhasil Diubah";
            // header("location: /travelkuy/admin/default_package.php");
        } else {
            // echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Hotel Gagal Diubah" . mysqli_error($conn);
            // header("location: /travelkuy/admin/default_package.php");
        }
    } 
}

?>