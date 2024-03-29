<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo Fatorial</title>
</head>
<body>
    <h2>Cálculo Fatorial</h2>
    <form method="post">
        <label for="numero">Digite um número para calcular o fatorial:</label>
        <input type="number" id="numero" name="numero" required><br>
        <button type="submit">Calcular Fatorial</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $fatorial = 1;

        for ($i = $numero; $i >= 1; $i--) {
            $fatorial *= $i;
        }

        echo "O fatorial de $numero é: $fatorial";
    }
    ?>
</body>
</html>
