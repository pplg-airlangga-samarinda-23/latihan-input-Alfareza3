<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Volume Tabung</title>
</head>
<body>
    <form action="" method="post">
        jari-jari: <input type="number" name="jari"><br>
        Tinggi: <input type="number" name="tinggi"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $phi = 22/7;
        $jari = $_POST['jari'];
        $tinggi = $_POST['tinggi'];

        if(is_numeric($jari) && is_numeric($tinggi) && $jari > 0 && $tinggi > 0) {
            $volume = $phi * $jari * $jari * $tinggi;

            echo("
            Phi = $phi <br />
            Jari-jari = $jari <br />
            Tinggi = $tinggi <br />
            Volume = $volume
            ");
        } else {
            echo "Input tidak valid. Pastikan jari-jari dan tinggi adalah angka positif.";
        }
    } else {
        echo "Silakan masukkan data melalui form.";
    }
    ?>