<?php

include 'config.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'tambah_hotel') {
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
                move_uploaded_file($tmp, '../assets/img/hotel/' . $gambar);
            }
        }


        $nama_hotel = mysqli_real_escape_string($conn, $_POST['nama_hotel']);
        $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
        $jumlah_kamar = mysqli_real_escape_string($conn, $_POST['jumlah_kamar']);
        $biaya_hotel = mysqli_real_escape_string($conn, $_POST['biaya_hotel']);
        $provinsi = mysqli_real_escape_string($conn, $_POST['provinsi']);
        $kota = mysqli_real_escape_string($conn, $_POST['kota']);
        $id_ph = $_SESSION['id_ph'];

        $sql = "INSERT INTO hotel(id_ph,nama_hotel,deskripsi_hotel,provinsi,kota,jumlah_kamar,biaya_hotel) VALUES ('$id_ph','$nama_hotel','$deskripsi','$provinsi','$kota','$jumlah_kamar','$biaya_hotel') ";
        if (mysqli_query($conn, $sql)) {
            $id_hotel = mysqli_insert_id($conn);
            $sql1 = "INSERT INTO foto_hotel(id_hotel, foto_hotel) VALUES ('$id_hotel', '$gambar')";
            $_SESSION['error'] = 0;
            $_SESSION['error_data'] = "Hotel Berhasil Ditambah";
            header("location: /travelkuy/adminhotel/");
        } else {
            // echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Hotel Gagal Ditambah";
            header("location: /travelkuy/adminhotel/");
        }
        
    } elseif ($act == 'hapus_hotel') {
        $id = $_GET['id'];
        $sql = "DELETE FROM hotel where id_hotel = '$id'";
        if(mysqli_query($conn, $sql)){
            $_SESSION['error'] = 0;
            $_SESSION['error_data'] = "Hotel Berhasil Dihapus";
            header("location: /travelkuy/adminhotel/");
        } else {
            // echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Hotel Gagal Dihapus";
            header("location: /travelkuy/adminhotel/");
        }

    } elseif ($act == 'edit_hotel') {
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
                move_uploaded_file($tmp, '../assets/img/hotel/' . $gambar);
            }
        }

        $nama_hotel = mysqli_real_escape_string($conn, $_POST['nama_hotel']);
        $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
        $jumlah_kamar = mysqli_real_escape_string($conn, $_POST['jumlah_kamar']);
        $biaya_hotel = mysqli_real_escape_string($conn, $_POST['biaya_hotel']);
        $provinsi = mysqli_real_escape_string($conn, $_POST['provinsi']);
        $kota = mysqli_real_escape_string($conn, $_POST['kota']);
        $id_ph = $_SESSION['id_ph'];
        $id = $_GET['id'];

        $sql = "UPDATE hotel SET nama_hotel = '$nama_hotel',
                            deskripsi_hotel = '$deskripsi', 
                            provinsi = '$provinsi', 
                            kota = '$kota', 
                            jumlah_kamar = '$jumlah_kamar', 
                            biaya_hotel = '$biaya_hotel' WHERE id_hotel = '$id'";
        if (mysqli_query($conn, $sql)) {
            $sql1 = "UPDATE foto_hotel SET id_hotel = '$id', foto_hotel = '$gambar'";
            $result = mysqli_query($conn, $sql1);
            $_SESSION['error'] = 0;
            $_SESSION['error_data'] = "Hotel Berhasil Diubah";
            header("location: /travelkuy/adminhotel/index.php?view=hotel&id=".$id);
        } else {
            // echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Hotel Gagal Diubah" . mysqli_error($conn);
            header("location: /travelkuy/adminhotel/index.php?view=hotel&id=" . $id);
        }
    } elseif ($act == 'edit_profile') {
        $error = $_FILES['foto_ktp_ph']['error'];
        var_dump($_FILES);
        if ($error === 4) {
            $gambar = "defaultphoto.png";
        } else {
            $namaFile = $_FILES['foto_ktp_ph']['name'];
            $tmp = $_FILES['foto_ktp_ph']['tmp_name'];
            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            $namaFileBaru = uniqid();
            $gambar = $namaFileBaru . '.' . $ekstensiGambar;
            if (in_array($ekstensiGambar, $ekstensiGambarValid)) {
                move_uploaded_file($tmp, '../assets/img/partner_hotel/' . $gambar);
            }
        }
        //form
        $nama_ph = mysqli_real_escape_string($conn, $_POST['nama_ph']);
        $telp_ph = mysqli_real_escape_string($conn, $_POST['telp_ph']);
        $id_ph = $_SESSION['id_ph'];

        $sql = "UPDATE partner_hotel SET nama_ph = '$nama_ph', telp_ph = '$telp_ph', foto_ktp_ph = '$gambar' WHERE id_ph = '$id_ph'";
        if (mysqli_query($conn, $sql)) {

            $_SESSION['error'] = 0;
            $_SESSION['error_data'] = "Profil Berhasil Diubah" . mysqli_error($conn);
            header("location: /travelkuy/adminhotel/");
        } else {
            // echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Profil Gagal Diubah" . mysqli_errno($conn);
            header("location: /travelkuy/adminhotel/");
        }
    }
}

?>