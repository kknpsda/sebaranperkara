<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Saya</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="kotak">
        <!-- Navigasi -->
        <div class="judul">
            <h1>
                <a href="index.html">Home</a> ||
                <a href="profile.html">Profile</a> || 
                <a href="petaa.html">Peta</a> ||
                <a href="if.php">Flowgorithm</a> ||
                <a href="tampil.php">Data</a>
            </h1>
        </div>

        <!-- Blok Usia -->
        <div class="blok">
            <div class="subjudul">
                <?php 
                    $usia = 10;
                    if ($usia > 17) {
                        echo "Bisa Buat SIM";
                    } else {
                        echo "Tidak Bisa Buat SIM";
                    }
                ?>
            </div>
        </div>

        <br>

        <!-- Blok Perhitungan -->
        <div class="blok">
            <div class="subjudul">
                <h2>Hitung Luas dan Keliling Persegi Panjang</h2>
                <form method="POST">
                    <label for="panjang">Panjang:</label>
                    <input type="number" name="panjang" id="panjang" required placeholder="Masukkan panjang">
                    <br>
                    <label for="lebar">Lebar:</label>
                    <input type="number" name="lebar" id="lebar" required placeholder="Masukkan lebar">
                    <br>
                    <button type="submit">Hitung</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $panjang = isset($_POST['panjang']) ? intval($_POST['panjang']) : 0;
                    $lebar = isset($_POST['lebar']) ? intval($_POST['lebar']) : 0;

                    if ($panjang > 0 && $lebar > 0) {
                        $luas = $panjang * $lebar;
                        $keliling = 2 * ($panjang + $lebar);

                        echo "<hr>";
                        echo "Panjang Persegi Panjang = $panjang <br>";
                        echo "Lebar Persegi Panjang = $lebar <br>";
                        echo "Luas Persegi Panjang = $luas <br>";
                        echo "Keliling Persegi Panjang = $keliling <br>";
                    } else {
                        echo "<hr>";
                        echo "Masukkan panjang dan lebar yang valid.";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
