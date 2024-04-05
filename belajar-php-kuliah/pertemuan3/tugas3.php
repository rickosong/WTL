<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TUGAS 3 (Daftar Kerajinan)</h1>

    <?php 

        $nama = "Mohammad Ricko Aprilianto";
        $alamat = "Banjarmasin";
        $divisi = "IT";
        $kehadiran = 30;
        $honor = $kehadiran * 50000;

        if($kehadiran >= 28){
            $statusKerajinan = "Super Sekali";
        } else if($kehadiran >= 25) {
            $statusKerajinan = "Super";
        } else if($kehadiran >= 22) {
            $statusKerajinan = "Luar Biasa";
        } else if($kehadiran >= 20){
            $statusKerajinan = "Biasa";
        } else if($kehadiran >= 15){
            $statusKerajinan = "Perlu Perhatian";
        }else {
            $statusKerajinan = "Waspadalah";
        }

        echo "Nama : $nama <br>";
        echo "Alamat : $alamat <br>";
        echo "Divisi : $divisi <br>";
        echo "kehadiran : $kehadiran <br>";
        echo "Honor : RP. $honor <br>";
        echo "Status Kerajinan : $statusKerajinan <br>";


    ?>
</body>
</html>