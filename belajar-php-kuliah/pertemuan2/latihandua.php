<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Dua</title>
</head>
<body>
    <h1>Contoh PHP kedua</h1>
    <?php
    
    date_default_timezone_set('Asia/Makassar');
    
    $nama = "Ricko";
    $nomor = 2;
    $tanggal = date("d F Y");
    $jam = date("H:i:s");

    echo ("ini halaman ke-$nomor diakses pada tanggal $tanggal <br>");
    printf ("ini halaman ke-%d diakses pada jam %s <br>", $nomor, $jam);
    print ("Selamat Belajar PHP $nama <br>");
    echo ("Semoga Sukses !");
    
    ?>
</body>
</html>