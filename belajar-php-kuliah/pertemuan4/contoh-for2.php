<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan FOR</title>
</head>
<body>
    <h1>CONTOH PENGULANGAN MENGGUNAKAN FOR</h1>
    <?php
        $nilaiUts = [70, 60, 80, 95, 55, 75, 85, 90, 45, 65];
        $nilaiUas = [75, 40, 65, 55, 75, 85, 92, 90, 86, 65];

        $angka = 1;
        for($i=0;$i<10;$i++){
            // echo "Saya mengulang pernyataan ini " . $i . " kali <br>";
            echo "No $angka : Nilai UTS = $nilaiUts[$i], NIlai UAS = $nilaiUas[$i] <br>";

            $nilaiAkhir = ($nilaiUts[$i] + $nilaiUas[$i])/2;
            echo "Nilai Akhir = $nilaiAkhir <br>";

            if($nilaiAkhir <= 60){
                echo "Status = Mengulang <br><br>";
            } else {
                echo "Status = Lulus <br><br>";
            }
            $angka++;
        }

    ?>
</body>
</html>