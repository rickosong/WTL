<?php
include "koneksiCoba.php";

$id = $_GET['id'];

if(isset($_POST["submit"])){
    $nama = $_POST['nama'];
    $db->query("UPDATE siswa SET nama = '$nama' WHERE id = $id");
    echo("<script>alert('Data Berhasil Diubah');window.location.assign('formCoba.php');</script>");
}

?>