<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Latihan Percabangan</h1>

    <?php 

        // variable
        $nama = "Mohammad Ricko Aprilianto";
        $kelas = "4A";
        $uts = 100;
        $uas = 90;
        $akhir = ($uts + $uas) / 2;

        // print untuk nama siswa/mahasiswa
        echo "Nama : $nama <br>";
        echo "Kelas : $kelas <br>";

        // if else untuk nilai uts
        if($uts <= 55){
            $statusUTS = "Remedial";
        } else {
            $statusUTS ="Tidak Remedial";
        }

        // if else untuk nilai UAS
        if ($uas <= 55){
            $statusUAS = "Remedial";
        } else{
            $statusUAS = "Tidak Remedial";
        }

        // if else untuk perhitungan huruf apa yang dikeluarkan
        if($akhir >= 80){
            $huruf = "A";
        } else if($akhir >= 60){
            $huruf = "B";
        } else if ($akhir >= 40){
            $huruf = "C";
        } else if ($akhir >= 20){
            $huruf = "D";
        } else {
            $huruf = "E";
        }

        // print semua nilai
        echo "Nilai UTS: $uts <br>";
        echo "Nilai UAS: $uas <br>";
        echo " Status UTS : $statusUTS <br>";
        echo " Status UAS : $statusUAS <br>";
        echo "Nilai Akhir : $akhir <br>";
        echo "Huruf : $huruf";

    ?>
    
</body>
</html>