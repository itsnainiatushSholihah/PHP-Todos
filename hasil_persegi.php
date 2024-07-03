<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Bangun Segitiga</title>

</head>
<body>

<?php

function luas ($s)
{
    $luas = $s * $s;
    return $luas;
}
function keliling ($s)
{
    $keliling = 4* $s;
    return $keliling;
}

?>

<?php

$sisi = $_POST["sisi"];
$luas = luas ($sisi);

$keliling = keliling($sisi);

?>

<h3>Luas segitiga dengan sisi <?= $sisi ?>adalah <?= $luas ?></h3>
<h3>Keliling segitiga dengan sisi <?= $sisi ?>adalah = <?= $keliling ?></h3>
    
</body>
</html>