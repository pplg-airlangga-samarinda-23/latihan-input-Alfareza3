<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator Umur</title>
</head>
<body>
    <h1>Kalkulator Umur</h1>

    <?php
    if(isset($_POST['birthdate'])){
        $birthdate = $_POST['birthdate'];
        $birthday = new DateTime($birthdate);
        $currentDate= new DateTime();
        $interval = $birthday->diff($currentDate);
        echo "umur : " .$interval -> y . " Tahun";
        }
    ?>
    <form method="post">
        <label for="birthdate">Masukkan tanggal lahir:</label>
        <input type="date" name="birthdate" id="birthdate">
        <button type="submit">Hitung Umur</button>
    </form>
</body>
</html>