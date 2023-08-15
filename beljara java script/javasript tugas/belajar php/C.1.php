<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h2>Form Biodata</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="umur">Umur:</label>
        <input type="number" name="umur" id="umur" required><br><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required></textarea><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $alamat = $_POST['alamat'];

        echo "<h2>Hasil Biodata</h2>";
        echo "Nama: $nama<br>";
        echo "Umur: $umur<br>";
        echo "Alamat: $alamat<br>";
    }
    ?>
</body>
</html>