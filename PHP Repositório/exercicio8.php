<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Tinta</title>
</head>
<body>
    <h2>Calculadora de Tinta</h2>
    <form method="post">
        <label for="area">Digite o tamanho da área a ser pintada em metros quadrados:</label>
        <input type="number" id="area" name="area" step="any" required><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $area = $_POST["area"];
        $litros_tinta = ceil($area / 3); 
        $latas = ceil($litros_tinta / 18); 
        $preco_total = $latas * 80; 

        echo "Você precisará de $latas latas de tinta, totalizando R$ $preco_total.";
    }
    ?>
</body>
</html>
