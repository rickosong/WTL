<?php

include 'koneksiCoba.php';

$nama = $_POST['nama'];

$query = "INSERT INTO siswa (nama) VALUES ('$nama')";

if (mysqli_query($db, $query)) {
    echo("<script>alert('Data Berhasil Disimpan');window.location.assign('formCoba1.php');</script>");
}else{
    echo("<script>alert('Data Gagal Disimpan');window.location.assign('formCoba1.php');</script>");
}

?>

