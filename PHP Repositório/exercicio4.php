<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <h2>Tabuada</h2>
    <form method="post">
        <label for="numero">Digite um número para a tabuada:</label>
        <input type="number" id="numero" name="numero" required><br>
        <button type="submit">Gerar Tabuada</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        echo "<h3>Tabuada do $numero:</h3>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero X $i = $resultado<br>";
        }
    }
    ?>
</body>
</html>
