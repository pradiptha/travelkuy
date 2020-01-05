<?php

include 'config.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'tambah') {
        // $error = $_FILES['foto']['error'];
        // var_dump($_FILES);
        // if ($error === 4) {
        //     $gambar = "defaultphoto.png";
        // } else {
            
            // $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            // $ekstensiGambar = explode('.', $namaFile);
            // $ekstensiGambar = strtolower(end($ekstensiGambar));
            // $namaFileBaru = uniqid();
            // $gambar = $namaFileBaru . '.' . $ekstensiGambar;
            // if (in_array($ekstensiGambar, $ekstensiGambarValid)) {
            //     move_uploaded_file($tmp, '../assets/img/destinasi/' . $gambar);
        //     }
        // }
        $error = array();
        $uploadedFiles = array();
        $extension = array("jpeg","jpg","png","gif");
        $UploadFolder = "../assets/img/destinasi/";


        $nama_destinasi = mysqli_real_escape_string($conn, $_POST['nama_destinasi']);
        $alamat_destinasi = mysqli_real_escape_string($conn, $_POST['alamat_destinasi']);
        $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
        $harga_destinasi = mysqli_real_escape_string($conn, $_POST['harga_destinasi']);
        $durasi_destinasi = mysqli_real_escape_string($conn, $_POST['waktu_destinasi']);
        $provinsi = mysqli_real_escape_string($conn, $_POST['provinsi']);
        $sql = "INSERT INTO destinasi(id_provinsi,nama_destinasi,deskripsi_destinasi,alamat_destinasi,biaya_destinasi,durasi) VALUES ('$provinsi','$nama_destinasi','$deskripsi','$alamat_destinasi','$harga_destinasi','$durasi_destinasi') ";
        

        if (mysqli_query($conn, $sql)) {
            $id_destinasi = mysqli_insert_id($conn);
            foreach ($_FILES["foto"]["tmp_name"] as $key=>$tmp_name){ 
                $temp = $_FILES['foto']['tmp_name'][$key]; 
                $namaFile = $_FILES['foto']['name'][$key];
                
                if(empty($temp))
                {
                    break;
                }
                $UploadOk = true;

                 
                if($UploadOk == true){
                    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
                    $ekstensiGambar = explode('.', $namaFile);
                    $ekstensiGambar = strtolower(end($ekstensiGambar));
                    $namaFileBaru = uniqid();
                    $gambar = $namaFileBaru . '.' . $ekstensiGambar;
                    if (in_array($ekstensiGambar, $ekstensiGambarValid)) {
                        move_uploaded_file($temp, '../assets/img/destinasi/' . $gambar);
                        $sql1 = "INSERT INTO foto_destinasi(id_destinasi, foto_destinasi) VALUES ('$id_destinasi', '$gambar')";
                        $hasil = mysqli_query($conn, $sql1);
                        array_push($uploadedFiles, $namaFile);
                    }

                }
                
                
                $_SESSION['error'] = 0;
                $_SESSION['error_data'] = "Destinasi Berhasil Ditambah";  
            }
            // header("location: /travelkuy/admin/destinasi.php");
        } else {
            // echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Paket Gagal Ditambah";
            header("location: /travelkuy/admin/destinasi.php");
        }
        
    } elseif ($act == 'hapus') {
        $id = $_GET['id'];
        $sql = "DELETE FROM destinasi where id_destinasi = '$id'";
        if(mysqli_query($conn, $sql)){
            $sql1 = "DELETE FROM paket_destinasi where id_destinasi = '$id' ";
            if(mysqli_query($conn, $sql1)){
                $sql2 = "DELETE FROM foto_destinasi where id_destinasi = '$id' ";
                $hasil = mysqli_query($conn,$sql2);
                $_SESSION['error'] = 0;
                $_SESSION['error_data'] = "Hotel Berhasil Dihapus";
                header("location: /travelkuy/admin/destinasi.php");
            }
            
            
        } else {
            // echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Hotel Gagal Dihapus";
            header("location: /travelkuy/admin/destinasi.php");
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
            header("location: /travelkuy/admin/default_package.php");
        } else {
            // echo ("Error description: " . mysqli_error($conn));
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Hotel Gagal Diubah" . mysqli_error($conn);
            header("location: /travelkuy/admin/default_package.php");
        }
    } 
}

?>