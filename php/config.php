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

$path = $_SERVER['DOCUMENT_ROOT'];

$current_file_name = basename($_SERVER['PHP_SELF']);
$title = pathinfo($current_file_name, PATHINFO_FILENAME);
$title = ucfirst($title);

include 'functions.php';
