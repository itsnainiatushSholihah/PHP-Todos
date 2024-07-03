<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Bangun Segitiga</title>

</head>
<body>

<?php

function luas ($t, $a)
{
    $luas = 0.5 * $t * $a;
    return $luas;
}
function keliling ($sa, $sb, $sc)
{
    $keliling = $sa * $sb * $sc;
    return $keliling;
}

?>

<?php

$tinggi = $_POST["tinggi"];
$alas = $_POST["alas"];
$luas = luas ($tinggi, $alas);

$sisia = $_POST["sisia"];
$sisib = $_POST["sisib"];
$sisic = $_POST["sisic"];
$keliling = keliling($sisia, $sisib, $sisic);

?>

<h3>Luas segitiga dengan tinggi <?= $tinggi ?> dan alas <?= $alas ?> adalah <?= $luas ?></h3>
<h3>Keliling segitiga dengan sisi a <?= $sisia ?> , sisi b <?= $sisib ?> , sisi c <?= $sisic ?> adalah = <?= $keliling ?></h3>
    
</body>
</html>