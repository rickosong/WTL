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
        $nilai = 50;
        for($i=1;$i<=5;$i++){
            // echo "Saya mengulang pernyataan ini " . $i . " kali <br>";
            echo "No $i : Nilai = $nilai <br>";

            if($nilai <= 60){
                echo "Status = Mengulang <br><br>";
            } else {
                echo "Status = Lulus <br><br>";
            }
            $nilai = $nilai + 5;
        }

    ?>
</body>
</html>