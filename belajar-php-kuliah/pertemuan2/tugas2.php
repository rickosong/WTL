<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Dua</title>
</head>
<body>
    <center><h2>Biodata</h2></center>

    <?php 

    $nama = "Mohammad Ricko Aprilianto";
    $nim = "E030422015";
    $prodi = "Bisnis Digital";
    $ipk = 3.85;
    $tanggal_lahir = "04 April 2004";

    ?>

    <table border="0">
        <tr>
            <td><b>Nama</b></td>
            <td>:</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td><b>NIM</b></td>
            <td>:</td>
            <td><?= $nim ?></td>
        </tr>
        <tr>
            <td><b>PRODI</b></td>
            <td>:</td>
            <td><?= $prodi ?></td>
        </tr>
        <tr>
            <td><b>IPK</b></td>
            <td>:</td>
            <td><?= $ipk ?></td>
        </tr>
        <tr>
            <td><b>Tanggal Lahir</b></td>
            <td>:</td>
            <td><?= $tanggal_lahir ?></td>
        </tr>
    </table>
</body>
</html>