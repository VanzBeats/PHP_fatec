<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ordenar Valores</title>
</head>
<body>
    <h2>Ordenar Valores</h2>
    <form method="post">
        <label for="valorA">Digite o valor A:</label>
        <input type="number" id="valorA" name="valorA" required><br>
        <label for="valorB">Digite o valor B:</label>
        <input type="number" id="valorB" name="valorB" required><br>
        <button type="submit">Ordenar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];

        if ($valorA == $valorB) {
            echo "Números iguais: $valorA";
        } elseif ($valorA < $valorB) {
            echo "$valorA $valorB";
        } else {
            echo "$valorB $valorA";
        }
    }
    ?>
</body>
</html>
