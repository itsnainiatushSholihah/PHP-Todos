<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Bangun Lingkaran</title>

</head>
<body>

<?php

function luas ($j)
{
    $luas = 3.14 *$j *$j;
    return $luas;
}

function keliling ($j)
{
    $keliling = 2 * 3.14 * $j;
    return $keliling;
}



?>

<?php

$jari = $_POST["jari"];
$luas = luas ($jari);

$jari = $_POST["jari"];
$keliling = keliling ("$jari");

?>

<h3>Luas lingkaran dengan jari-jari <?= $jari ?> adalah = <?= $luas ?></h3>
<h3>Keliling lingkaran dengan jari jari <?= $jari ?> adalah = <?= $keliling ?></h3>
    
</body>
</html>