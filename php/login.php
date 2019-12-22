<?php

include 'config.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'login') {
        $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $user_password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM user where username='$user_name'";

        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);

        $password = $data['password'];
        $tingkatan = $data["tingkatan"];
        $id = $data['id_user'];

        if ($data) {
            if (password_verify($user_password, $password)) {
                $_SESSION['username'] = $_POST['user_name'];
                $_SESSION['id'] = $id;
                if ($tingkatan == 0) {
                    $_SESSION['tingkatan'] = $tingkatan;
                    echo '0';
                } else if ($tingkatan == 1) {
                    $sql = "SELECT * FROM partner_hotel where id_user='$id'";
                    $data_ph = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                    $_SESSION['tingkatan'] = $tingkatan;
                    $_SESSION['id_ph'] = $data_ph['id_ph'];
                    echo '1';
                } else if ($tingkatan == 2) {
                    $_SESSION['tingkatan'] = $tingkatan;
                    echo '2';
                }
            } else {
                echo "error2";
            }
        } else {
            echo "error1";
        }
    } elseif ($act == 'register') {
        $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
        $user_password = mysqli_real_escape_string($conn, $_POST['password']);
        $password = password_hash($user_password, PASSWORD_DEFAULT);
        if (isset($_GET['role'])) {
            // $role = $_GET['role'];
            $role = 1;
        } else {
            $role = 0;
        }
        $sql = "INSERT INTO user(username,password,email,tingkatan) VALUES ('$user_name','$password','$user_email','$role') ";
        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            if ($role == 0) {
                $sql1 = "INSERT INTO customer(id_user,nama_customer,foto_profil) VALUES ('$last_id','$user_name','nophoto.png')";
            } elseif ($role == 1) {
                $sql1 = "INSERT INTO `partner_hotel`(`id_user`, `nama_ph`, `status`) VALUES ('$last_id','$user_name','0')";
                
            }
            if (!mysqli_query($conn, $sql1)) {
                // echo ("1");
                echo ("Error description: " . mysqli_error($conn));
            } else {
                echo "registered";
            }
        } else {
            echo ("1");
        }
    } elseif ($act == 'logout') {
        session_unset();
        session_destroy();
        header('Location: /travelkuy/');
    }
}
