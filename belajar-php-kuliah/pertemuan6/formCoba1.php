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

    <form action="cekCoba1.php" method="post">
        <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama" id="nama" placeholder="Nama Siswa"></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>

