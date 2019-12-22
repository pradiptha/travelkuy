<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'travelkuy';

$baseurl = 'travelkuy';

$conn = mysqli_connect($host, $user, $pass, $db);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
