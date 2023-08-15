<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h2>Biodata Formular</h2>

    <?php
    // Überprüfen, ob das Formular abgeschickt wurde
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Biodaten aus dem Formular erfassen
        $name = $_POST["name"];
        $UMUR = $_POST["UMUR"];
        $NIM = $_POST["NIM"];
        $ALAMAT = $_POST["ALAMAT"];

        // Biodaten anzeigen
        echo "<h3>Ihre Biodaten:</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>UMUR:</strong> $UMUR</p>";
        echo "<p><strong>NIM:</strong> $NIM</p>";
        echo "<p><strong>ALAMAT:</strong> $ALAMAT</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="UMUR">UMUR:</label>
        <input type="number" name="UMUR" required><br>

        <label for="NIM">NIM:</label>
        <input type="text" name="NIM" required><br>

        <label for="ALAMAT">ALAMAT:</label>
        <input type="tel" name="ALAMAT" required><br>

        <input type="submit" value="Absenden">
    </form>

</body>
</html>