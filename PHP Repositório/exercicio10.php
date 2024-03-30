<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <form method="post">
        <label for="peso">Digite o peso (em kg):</label>
        <input type="number" id="peso" name="peso" step="any" required><br>
        <label for="altura">Digite a altura (em metros):</label>
        <input type="number" id="altura" name="altura" step="any" required><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura * $altura);
        
        echo "Seu IMC é: $imc<br>";

        if ($imc < 18.5) {
            echo "Você está abaixo do peso.";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "Seu peso está dentro da faixa considerada normal.";
        } else {
            echo "Você está acima do peso.";
        }
    }
    ?>
</body>
</html>
