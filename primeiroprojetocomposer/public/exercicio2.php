<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Menor Valor e suas Posições</title>
</head>
<body>
    <h2>Menor Valor e suas Posições</h2>
    <form action = "exercicio2/resposta" form method="post">
        <?php
        for ($i = 1; $i <= 7; $i++) {
            echo "<label for='numero{$i}'>Digite o {$i}º valor:</label>";
            echo "<input type='number' id='numero{$i}' name='valor[]' required><br>";
        }
        ?>
        <button type="submit">Encontrar Menor Valor</button>
    </form>

</body>
</html>
