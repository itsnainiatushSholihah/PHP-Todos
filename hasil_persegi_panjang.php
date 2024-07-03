<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Bangun Segitiga</title>

</head>
<body>

<?php

function luas ($p, $t)
{
    $luas = $p * $t;
    return $luas;
}
function keliling ($p, $t)
{
    $keliling = 2 * ($p + $t);
    return $keliling;
}

?>

<?php

$panjang = $_POST["panjang"];
$tinggi = $_POST["tinggi"];
$luas = luas ($panjang, $tinggi);

$keliling = keliling($panjang, $tinggi);

?>

<h3>Luas segitiga dengan panjang <?= $panjang ?> dan tinggi <?= $tinggi ?> adalah <?= $luas ?></h3>
<h3>Keliling segitiga dengan panjang <?= $panjang ?> dan tinggi <?= $tinggi ?> adalah = <?= $keliling ?></h3>
    
</body>
</html>