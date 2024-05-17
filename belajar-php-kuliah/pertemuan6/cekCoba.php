<?php

$nama = $_POST['nama'];

if($nama == ""){
    header("location:formCoba.php?nama=kosong");
}else{
    echo "Nama Siswa Adalah : " . $nama;
}

?>

