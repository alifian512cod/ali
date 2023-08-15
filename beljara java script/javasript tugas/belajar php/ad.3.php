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
        $alter = $_POST["alter"];
        $adresse = $_POST["adresse"];
        $telefon = $_POST["telefon"];

        // Biodaten anzeigen
        echo "<h3>Ihre Biodaten:</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Alter:</strong> $alter</p>";
        echo "<p><strong>Adresse:</strong> $adresse</p>";
        echo "<p><strong>Telefon:</strong> $telefon</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="alter">Alter:</label>
        <input type="number" name="alter" required><br>

        <label for="adresse">Adresse:</label>
        <input type="text" name="adresse" required><br>

        <label for="telefon">Telefon:</label>
        <input type="tel" name="telefon" required><br>

        <input type="submit" value="Absenden">
    </form>

</body>
</html>