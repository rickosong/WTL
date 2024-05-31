<?php
include "koneksiCoba.php";

$id = $_GET['id'];

$query = "DELETE FROM siswa WHERE id = $id";

if (mysqli_query($db, $query)) {
    echo("<script>alert('Data Berhasil Dihapus');window.location.assign('formCoba.php');</script>");
} else {
    echo("<script>alert('Data Gagal Dihapus');window.location.assign('formCoba.php');</script>");
}

?>

