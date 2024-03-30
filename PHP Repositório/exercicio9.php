<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Idade</title>
</head>
<body>
    <h2>Calculadora de Idade</h2>
    <form method="post">
        <label for="ano_nascimento">Digite o ano de nascimento:</label>
        <input type="number" id="ano_nascimento" name="ano_nascimento" required><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ano_nascimento = $_POST["ano_nascimento"];
        $ano_atual = date("Y");
        
        $idade = $ano_atual - $ano_nascimento;
        
        $dias_vividos = $idade * 365; 

        $idade_2025 = 2025 - $ano_nascimento;

        echo "Idade: $idade anos<br>";
        echo "Dias vividos: $dias_vividos dias<br>";
        echo "Idade em 2025: $idade_2025 anos";
    }
    ?>
</body>
</html>
