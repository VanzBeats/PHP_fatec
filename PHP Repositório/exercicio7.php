<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Metros para Centímetros</title>
</head>
<body>
    <h2>Conversor de Metros para Centímetros</h2>
    <form method="post">
        <label for="metros">Digite o valor em metros:</label>
        <input type="number" id="metros" name="metros" step="any" required><br>
        <button type="submit">Converter</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $metros = $_POST["metros"];
        $centimetros = $metros * 100;

        echo "$metros metros equivalem a $centimetros centímetros.";
    }
    ?>
</body>
</html>
