<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplikasi Bilangan Ganjil-Genap</title>
</head>
<body>
    <h1>Menentukan Bilangan Ganjil-Genap</h1>
    <form method="POST">
        <label for="Numberinput">Masukkan Bilangan (5-20):</label>
        <input type="number" id="Numberinput" name="Numberinput" min="5" max="20" required>

        <label for="typeSelect">Pilih tipe bilangan:</label>
        <select name="typeSelect" required>
            <option value="ganjil">Ganjil</option>
            <option value="genap">Genap</option>
        </select>

        <button type="submit">Tampilkan</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Numberinput = $_POST["Numberinput"];
        $typeSelect = $_POST["typeSelect"];
        $name = "Dimas";

        echo "<h3>Hasil:</h3>";
        for ($i = 1; $i <= $Numberinput; $i++) {
            if ($typeSelect == "ganjil" && $i % 2 != 0) {
                echo "$i $name<br>";
            } elseif ($typeSelect == "genap" && $i % 2 == 0) {
                echo "$i $name<br>";
            } else {
                echo "$i<br>";
            }
        }
    }
    ?>
</body>
</html>
