<?php
$config = 1;

if ($config == 1) {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'travelkuy';
    
} else {
    $host = 'remotemysql.com:3306';
    $user = 'vuzOinu8zi';
    $pass = 'J3W1j9FhN2';
    $db = 'vuzOinu8zi';
}

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
