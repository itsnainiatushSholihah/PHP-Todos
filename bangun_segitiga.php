<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun segitiga</title>

</head>
<body>

    <a href="index.php">Home</a>
    <a href="bmi.php">BMI</a>
    <a href="bangun_segitiga.php"> Hitung Segitiga </a>
    <a href="lingkaran.php"> Hitung Lingkaran </a>
    
    <form action="hasil_segitiga.php" method="post">

    <div>
        <label for="tinggi">Masukkan tinggi (cm)</label>
        <input type="number" name="tinggi">
    </div>

    <div>
        <label for="alas">Masukkan alas (cm)</label>
        <input type="number" name="alas">
    </div>

    <div>
        <label for="sisia">Masukkan Sisi a</label>
        <input type="number" name="sisia">
    </div>

    <div>
        <label for="sisib">Masukkan sisi b</label>
        <input type="number" name="sisib">
    </div>

    <div>
        <label for="sisic">Masukkan sisi c</label>
        <input type="number" name="sisic">
    </div>




    <input type="submit" value="kirim">

</form>



</body>
</html>