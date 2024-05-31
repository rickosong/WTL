<?php

include "koneksiCoba.php";

$id = $_GET['id'];

$data = $db->query("SELECT * FROM siswa WHERE id = $id")->fetch_assoc();

if(isset($_POST["submit"])){
    $nama = $_POST['nama'];
    $db->query("UPDATE siswa SET nama = '$nama' WHERE id = $id");
    echo("<script>alert('Data Berhasil Diubah');window.location.assign('formCoba.php');</script>");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="updateCoba.php" method="post">
        <table>
            <tr>
                <td>Nama :  </td> 
                <td><input type="text" name="nama" id="nama" placeholder="Nama Siswa" value="<?=$data['nama']?>"></td>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>