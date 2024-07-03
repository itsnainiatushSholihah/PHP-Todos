<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1</title>

<style>
    span{
        width: 250px;
        display: inline-block;
    }
</style>

</head>
<body>

    <a href="index.php">Home</a>
    <a href="bmi.php">BMI</a>
    <a href="bangun_segitiga.php"> Hitung Segitiga </a>
    <a href="lingkaran.php"> Hitung Lingkaran </a>
    
    <?php 
    
    echo "<h3>BIODATA<h3>";
    echo "<hr>";
    
    // membuat biodata menggunakan variable

    $nama = "Itsnainiatush Sholihah";
    $kelas = "IK2";
    $jurusan = "Informatika";
    $jk = "Perempuan";
    $cita = "Apa aja";
    $motivasi = "Semangat";

    echo "<p><span>Nama</span>: $nama</p>";
    echo "<p><span>Kelas</span>: $kelas</p>";
    echo "<p><span>Jurusan</span>: $jurusan</p>";
    echo "<p><span>Jenis Kelamin</span>: $jk</p>";
    echo "<p><span>Cita-cita</span>: $cita</p>";
    echo "<p><span>Motivasi</span>: $motivasi</p>";
    
    
    ?>


</body>
</html>