<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimension 3</title>
    <link reel="stylesheet" href="EstilosPagina.css">
</head>
<body>
    <h1>Casa de Cambio CGMH</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="amount">Cantidad:</label>
        <input type="text" id="amount" name="amount">
        <br>
        <input type="radio" id="pesoToDollar" name="conversion_type" value="peso_to_dollar">
        <label for="pesoToDollar">Pesos a Dólares</label>
        <br>
        <input type="radio" id="dollarToPeso" name="conversion_type" value="dollar_to_peso">
        <label for="dollarToPeso">Dólares a Pesos</label>
        <br>
        <input type="submit" value="Convertir">
    </form>

    <?php
    function pesoAdolar($amount) {
        return $amount * 0.05;
    }

    function dolarApeso($amount) {
        return $amount * 20;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_POST["amount"];
        $conversion_type = $_POST["conversion_type"];

        if ($conversion_type == "peso_to_dollar") {
            $result = pesoAdolar($amount);
            echo "<p>$amount pesos son $result dólares.</p>";
        } elseif ($conversion_type == "dollar_to_peso") {
            $result = dolarApeso($amount);
            echo "<p>$amount dólares son $result pesos.</p>";
        }
    }
    ?>
</body>
</html>
