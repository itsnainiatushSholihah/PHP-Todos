<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil BMI</title>
</head>
<body>

<a href="index.php">Home</a>
    <a href="bmi.php">BMI</a>
    <a href="hasil_segitiga.php"> Hasil Segitiga </a>

    
<?php

$nama = $_POST["nama"];
$tinggi = $_POST["tinggi"]/100;
$berat = $_POST["berat"];

$bmi = $berat / ( $tinggi * $tinggi );

?>

<h3>Nilai BMI kamu adalah = <?= $bmi; ?></h3>

<?php

/*
Dibawah 18,5 = berat badan kurang
18,5 - 22,9 = berat badan normal.
23 - 29,9 = berat badan berlebih.
30 ke atas = obesitas
*/

$hasil = "";
if ($bmi <18.5)
{
    $hasil = "Berat badan kurang";
}
else if ($bmi > 22.9)
{
    $hasil = "Berat badan normal";
}
else if ($bmi > 22.9)
{
    $hasil = "Berat badan berlebih";
}
else
{
    $hasil = "Obesitas";
}


?>



<p>Standar kategori berat badan pria dan wanita menurut WHO : <?= $hasil ?></p>

</body>
</html>