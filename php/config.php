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

function queryMultiple($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
