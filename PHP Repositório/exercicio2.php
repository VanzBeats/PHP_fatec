<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Menor Valor e suas Posições</title>
</head>
<body>
    <h2>Menor Valor e suas Posições</h2>
    <form method="post">
        <?php
        $menorValor = PHP_INT_MAX;
        $posicoesMenorValor = array();

        for ($i = 1; $i <= 7; $i++) {
            echo "<label for='numero{$i}'>Digite o {$i}º valor:</label>";
            echo "<input type='number' id='numero{$i}' name='numeros[]' required><br>";
        }
        ?>
        <button type="submit">Encontrar Menor Valor</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = $_POST["numeros"];

        //verificar qual o menor valor e onde ele está
        foreach ($numeros as $posicao => $numero) {
            if ($numero < $menorValor) {
                $menorValor = $numero;
                $posicoesMenorValor = array($posicao + 1); //iniciar de 1
            } elseif ($numero == $menorValor) {
                $posicoesMenorValor[] = $posicao + 1;
            }
        }

        echo "<p>O menor valor é: $menorValor e está na(s) posição(ões): ";
        echo implode(", ", $posicoesMenorValor);
        echo "</p>";
    }
    ?>
</body>
</html>
