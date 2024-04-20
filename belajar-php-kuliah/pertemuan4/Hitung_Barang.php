<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Barang</title>
</head>
<body>
    <h1>Perhitungan Barang</h1>
    <?php

        $barang = ["Advan Workplus", "Advan Workpro", "Advan Stylus Pen 360", "Advan Soulmate", "Advan Tablet 5"];
        $harga = [7000000, 5000000, 6000000, 2300000, 2000000];
        $jml_beli = [10, 5, 12, 8, 3];

        $total = 0;

        for($i=0; $i<5; $i++){
            $totalSatuan = $harga[$i] * $jml_beli[$i];

            echo "Barang Belanjaan Anda : $barang[$i]<br>";
            echo "Harga : RP. $harga[$i] <br>"; 
            echo "Jumlah Pembelian : $jml_beli[$i] Barang <br>";
            echo "Total Satuan = Rp. $totalSatuan <br><br>";

            $total += $totalSatuan; 
        }
        echo "<b>Total Pembelian  = Rp. $total <b>";

    ?>
</body>
</html>