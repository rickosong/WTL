<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cek Nama Siswa</title>
</head>
<body>
    <h1>Form Validasi Siswa</h1>
    <h1>---</h1>
    <h4>Masukkan Nama Anda</h4>

    <?php
    
    if(isset($_GET['nama'])){
        if($_GET['nama'] == "kosong"){
            echo "<h4 style= 'color:red'>Nama Siswa Tidak Boleh Kosong</h4>";
        }
    }

    ?>

    <form action="cekCoba.php" method="post">
        <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama" id="nama" placeholder="Nama Siswa"></td>
                <td><input type="submit" value="Cek"></td>
            </tr>
        </table>
    </form>


    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Hapus</th>
            <th>Ubah</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        include "koneksiCoba.php"; 
        $data = $db->query("SELECT * FROM siswa ORDER BY siswa.id");
        $no = 1;
        ?>
        <?php foreach ($data as $siswa) : ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $siswa["id"] ?></td>
                <td><?= $siswa["nama"] ?></td>
                <td><a href="delCoba1.php?id=<?= $siswa["id"] ?>">Hapus</a></td>
                <td><a href="editCoba1.php?id=<?= $siswa["id"] ?>">Ubah</a></td>
            </tr>
            <?php $no++ ?>
        <?php endforeach ?>
        </tbody>
    </table>


</body>
</html>

