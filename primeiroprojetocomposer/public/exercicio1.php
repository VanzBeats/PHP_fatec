<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificar Número</title>
</head>
<body>
    <h2>Verificar Número</h2>
    <form action ="exercicio1/resposta" form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        if ($numero > 0) {
            echo "O número $numero é positivo.";
        } elseif ($numero < 0) {
            echo "O número $numero é negativo.";
        } else {
            echo "O número é igual a zero.";
        }
    }
    ?>
</body>
</html>
