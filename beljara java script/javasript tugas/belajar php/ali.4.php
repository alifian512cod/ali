<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas Segi Panjang</title>
</head>
<body>
    <h2>Kalkulator Luas Segi Panjang</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Panjang: <input type="text" name="panjang"><br><br>
        Lebar: <input type="text" name="lebar"><br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai panjang dan lebar dari form
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        // Menghitung luas segi panjang
        $luas = $panjang * $lebar;

        // Menampilkan hasil perhitungan
        echo "<h3>Hasil Perhitungan</h3>";
        echo "Panjang: " . $panjang . "<br>";
        echo "Lebar: " . $lebar . "<br>";
        echo "Luas: " . $luas;
    }
    ?>
</body>
</html