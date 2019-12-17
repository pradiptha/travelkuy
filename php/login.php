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

        if ($data) {
            if (password_verify($user_password, $password)) {
                $_SESSION['username'] = $_POST['user_name'];
                $_SESSION['id'] = $data['id_user'];
                if ($tingkatan == 0) {
                    $_SESSION['tingkatan'] = $tingkatan;
                    echo '0';
                } else if ($tingkatan == 1) {
                    $_SESSION['tingkatan'] = $tingkatan;
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

        $sql = "INSERT INTO user(username,password,email,tingkatan) VALUES ('$user_name','$password','$user_email','0') ";
        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            $sql1 = "INSERT INTO customer(id_user,nama_customer,foto_profil) VALUES ('$last_id','$user_name','nophoto.png')";
            if (!mysqli_query($conn, $sql1)) {
                echo ("1");
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
