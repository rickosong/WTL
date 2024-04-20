<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>
    <h1>DATA NILAI SISWA</h1>

    <?php

        $nama = ["Andhika", "Bagas", "Cantika", "Daniel", "Erika", "Fariz", "Gilang" ,"Haikal", "Irwan", "Jahrotan",];
        $kelas = ["2A", "2B" , "2C", "2D", "2E", "2F", "2G", "2H", "2I", "2J"];
        $tugas = [60, 70, 80, 90, 100, 55, 65, 75, 85, 95];
        $ulangan1 = [95, 85, 75, 65, 55, 100, 90, 80, 70, 60];
        $ulangan2 = [20, 30, 25, 35, 5, 100, 70, 75, 45, 15];

        $angka = 1;
        for($i = 0; $i < 10; $i++){
            echo "No. $angka Nama Siswa : $nama[$i] Kelas : $kelas[$i] <br> 
            Memperoleh Nilai Sebagai berikut : <br>
            - Nilai Tugas = $tugas[$i] <br> 
            - Nilai Ulangan 1 = $ulangan1[$i] <br>
            - Nilai Ulangan 2 = $ulangan2[$i] <br>";

            $nilaiAkhir = ($tugas[$i]*0.2) + ($ulangan1[$i]*0.3) + ($ulangan2[$i]*0.5);
            echo " Didapatkanlah Nilai Akhir = $nilaiAkhir <br>";

            if($nilaiAkhir < 60){
                echo "Status = Mengulang <br><br>";
            } else {
                echo "Status = Lulus <br><br>";
            }
            $angka++;
        }

    ?>
</body>
</html>