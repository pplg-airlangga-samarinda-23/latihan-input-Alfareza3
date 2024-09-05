<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pola Bintang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result {
            font-family: monospace;
            white-space: pre;
        }
    </style>
</head>
<body>

<h2>Masukkan Bilangan untuk Pola Bintang</h2>

<form method="POST">
    <label for="numberInput">Masukkan Bilangan:</label>
    <input type="number" id="numberInput" name="numberInput" required>
    <button type="submit">Tampilkan Pola</button>
</form>

<div class="result">
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numberInput = $_POST["numberInput"];

            echo "<h3>Hasil Pola:</h3>";
            for ($i = $numberInput; $i > 0; $i--) {

                for ($j = 0; $j < ($numberInput - $i); $j++) {
                    echo "&nbsp;&nbsp;";
                }

                for ($k = 0; $k < (2 * $i - 1); $k++) {
                    echo "* ";
                }
                echo "<br>";
            }
        }
    ?>
</div>

</body>
</html>
