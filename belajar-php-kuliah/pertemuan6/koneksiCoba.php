<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "bootstrap";

$db = mysqli_connect($server, $user, $password, $db);
echo "berhasil terkoneksi...";

if(!$db){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>

