<form action="" method="post">

<input type="text" name="n1" value="" placeholder="Masukkan Bilangan"><br>
<input type="text" name="n2" value="" placeholder="Masukkan Bilangan"><br>
<input type="submit" value="tambah" name="a">
<input type="submit" value="kurang" name="m">
<input type="submit" value="kali" name="d">
<input type="submit" value="bagi" name="s">
</form>

<?php
if(isset($_POST['a']))
{
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$tambah = $n1+$n2;
echo "Hasilnya adalah: ".$tambah;
}

if(isset($_POST['m']))
{
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$tambah = $n1-$n2;
echo "Hasilnya adalah: ".$tambah;
}

if(isset($_POST['d']))
{
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$tambah = $n1*$n2;
echo "Hasilnya adalah: ".$tambah;
}

if(isset($_POST['s']))
{
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$tambah = $n1/$n2;
echo "Hasilnya adalah: ".$tambah;
}


?>