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

        $nama = "Mohammad Ricko Aprilianto";
        $kelas = "4A";
        $uts = 100;

        echo "Nama : $nama <br>";
        echo "Kelas : $kelas <br>";

        if($uts <= 55){
            $statusUTS = "Remedial";
        } elseif ($uts > 55 && $uts < 100){
                $statusUTS = "AMAN";
        } else if ($uts > 100) {
            $statusUTS = "Anda memasukkan nilai Invalid";
        } else{
            $statusUTS ="ANJAY SEMPURNA";
        }

        echo "Nilai : $uts <br>";
        echo " Status UTS : $statusUTS";

    ?>
</body>
</html>