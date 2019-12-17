<?php
include('connect.php');
$nama = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$sql = "INSERT INTO user(password,email,tingkatan) VALUES ('$password','$email','0') ";
if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    $sql1 = "INSERT INTO customer(id_user,nama_customer,foto_profil)
     			VALUES ('$last_id','$nama','nophoto.png')";
    if (!mysqli_query($conn, $sql1)) {
        echo ("Error description: " . mysqli_error($conn));
    }
    echo "User Registration Successfull!";
} else {
    echo ("Error description: " . mysqli_error($conn));
}
