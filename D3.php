<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimension 3</title>
</head>
<body>
    <h2>Calcula tu edad</h2>
    <form action="" method="post">
        <label for="birthdate">Ingresa tu fecha de nacimiento:</label>
        <input type="date" id="birthdate" name="birthdate">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $birthdate = $_POST["birthdate"];

        $diff = time() - strtotime($birthdate);

        $years = floor($diff / (365 * 24 * 60 * 60));
        $months = floor(($diff - $years * 365 * 24 * 60 * 60) / (30 * 24 * 60 * 60));
        $weeks = floor(($diff - $years * 365 * 24 * 60 * 60 - $months * 30 * 24 * 60 * 60) / (7 * 24 * 60 * 60));
        $days = floor(($diff - $years * 365 * 24 * 60 * 60 - $months * 30 * 24 * 60 * 60 - $weeks * 7 * 24 * 60 * 60) / (24 * 60 * 60));
        $hours = floor(($diff - $years * 365 * 24 * 60 * 60 - $months * 30 * 24 * 60 * 60 - $weeks * 7 * 24 * 60 * 60 - $days * 24 * 60 * 60) / (60 * 60));
        $minutes = floor(($diff - $years * 365 * 24 * 60 * 60 - $months * 30 * 24 * 60 * 60 - $weeks * 7 * 24 * 60 * 60 - $days * 24 * 60 * 60 - $hours * 60 * 60) / 60);
        $seconds = $diff % 60;

        echo "<h3>Edad:</h3>";
        echo "<p>Años: $years</p>";
        echo "<p>Meses: $months</p>";
        echo "<p>Semanas: $weeks</p>";
        echo "<p>Días: $days</p>";
        echo "<p>Horas: $hours</p>";
        echo "<p>Minutos: $minutes</p>";
        echo "<p>Segundos: $seconds</p>";
    }
    ?>
</body>
</html>
