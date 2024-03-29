<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Soma dos Valores</title>
</head>
<body>
    <h2>Soma dos Valores</h2>
    <form method="post">
        <label for="valor1">Digite o primeiro valor:</label>
        <input type="number" id="valor1" name="valor1" required><br>
        <label for="valor2">Digite o segundo valor:</label>
        <input type="number" id="valor2" name="valor2" required><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];

        $soma = $valor1 + $valor2;
        if ($valor1 == $valor2) {
            $soma *= 3;
        }

        echo "O resultado da soma é: $soma";
    }
    ?>
</body>
</html>
