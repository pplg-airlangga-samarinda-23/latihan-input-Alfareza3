<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jarak</title>
</head>
<body>
    <form action="" method="post">
        <label for="kilometer">Masukkan Jarak Kilometer:</label>
        <input type="text" id="kilometer" name="kilometer" required><br><br>

        <label for="konversi">Pilih jenis konversi:</label>
        <select id="konversi" name="konversi">
            <option value="m">Kilometer ke meter</option>
            <option value="cm">Kilometer ke sentimeter</option>
            <option value="mm">Kilometer ke milimeter</option>
        </select><br><br>
        <input type="submit" name="submit" value="konversi">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $kilometer = $_POST['kilometer'];
        $konversi = $_POST['konversi'];

        if(is_numeric($kilometer) && $kilometer > 0){
            switch ($konversi) {
                case 'm':
                    $hasil = $kilometer * 1000;
                    $satuan = "meter"; 
                    break;
                case"cm":
                    $hasil = $kilometer *100000;
                    $satuan = "sentimeter";
                    break;
                case"mm":
                    $hasil = $kilometer *1000000;
                    $satuan = "milimeter";
                    break;
            default:
            $hasil = 0;
            $satuan = "satuan tidak dikenal";
            break;
    }



            echo "Jarak: $kilometer kilometer <br />";
            echo "Hasil Konversi: $hasil $satuan";
        } else {
            echo "Input tidak valid. Pastikan nilai jarak adalah angka positif.";
        }
    } else {
        echo "Silakan masukkan data melalui form.";
    }
    ?>