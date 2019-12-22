<?php

include 'config.php';

if (isset($_GET['act']) && isset($_POST['submit'])) {
    $act = $_GET['act'];
    // var_dump($_POST);
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
} elseif ($act == 'edit_email') {
    echo "duar";
    $user_name = $_SESSION['username'];
    $new_email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM user where username='$user_name'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $password = $data['password'];
    $tingkatan = $data["tingkatan"];
    $id_user = $_SESSION['id'];

    if ($data) {
        if (password_verify($user_password, $password)) {
            $sql1 = mysqli_query($conn, "UPDATE user SET
                                email = '$new_email' WHERE id_user = '$id_user' ");
            $_SESSION['error'] = 0;
            $_SESSION['error_data'] = "Email Berhasil Diubah";

            header("location: /travelkuy/customer/profile.php?view=edit_email");
        } else {
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Email Gagal Diubah, Password tidak sesuai";
            header("location: /travelkuy/customer/profile.php?view=edit_email");
        }
    }
} elseif ($act == 'edit_password') {
    $user_name = $_SESSION['username'];
    $user_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $old_password = mysqli_real_escape_string($conn, $_POST['old_password']);

    $sql = "SELECT * FROM user where username='$user_name'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $password = $data['password'];
    $tingkatan = $data["tingkatan"];
    $id_user = $_SESSION['id'];

    if ($data) {
        if (password_verify($user_password, $password)) {
            $new_password = password_hash($user_password, PASSWORD_DEFAULT);
            $sql1 = mysqli_query($conn, "UPDATE user SET
                                password = '$new_password' WHERE id_user = '$id_user' ");
            
            $_SESSION['error'] = 0;
            $_SESSION['error_data'] = "Password Berhasil Diubah";

            header("location: /travelkuy/customer/profile.php?view=edit_password");
        } else {
            $_SESSION['error'] = 1;
            $_SESSION['error_data'] = "Password Lama Tidak Sesuai";
            header("location: /travelkuy/customer/profile.php?view=edit_password");
        }
    }
} else {
    header("location: /travelkuy/customer/profile.php");
}
