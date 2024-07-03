<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    
    <a href="index.php">Home</a>
    <a href="bmi.php">BMI</a>
    <a href="bangun_segitiga.php"> Hitung Segitiga </a>
    <a href="lingkaran.php"> Hitung Lingkaran </a>
    

    <form action="hasil-bmi.php" method="post">

    <div>
        <label for="nama">Masukkan Nama</label>
        <input type="text" name="nama">
    </div>

    <div>
        <label for="tinggi">Masukkan Tinggi (cm)</label>
        <input type="number" name="tinggi">
    </div>

    <div>
        <label for="berat">Masukkan Berat (kg)</label>
        <input type="number" name="berat">
    </div>

    <input type="submit" value="kirim">

    </form>



</body>
</html>