<?php

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    mysqli_affected_rows($conn);
}

function queryFetch($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    return $data;
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

function layout($layout){
    global $path;
    global $baseurl;
    include ("$path/$baseurl/layouts/$layout.php");
}

?>