<?php

require __DIR__."/vendor/autoload.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

$r = new Php\Primeiroprojeto\Router($metodo, $caminho);

#ROTAS

$r->get('/olamundo', function (){
    return "Olá mundo!";
} );

$r->get('/olapessoa/{nome}', function($params){
    return 'Olá '.$params[1];
} );

$r->get('/exer1/formulario', function(){
    include("exer1.html");
});

$r->get('/exercicio1', function(){
    include("exercicio1.php");
});

$r->get('/exercicio2', function(){
    include("exercicio2.php");
});

$r->get('/exercicio3', function(){
    include("exercicio3.php");
});

$r->get('/exercicio4', function(){
    include("exercicio4.php");
});

$r->get('/exercicio5', function(){
    include("exercicio5.php");
});

$r->get('/exercicio6', function(){
    include("exercicio6.php");
});

$r->get('/exercicio7', function(){
    include("exercicio7.php");
});

$r->get('/exercicio8', function(){
    include("exercicio8.php");
});

$r->get('/exercicio9', function(){
    include("exercicio9.php");
});

$r->get('/exercicio10', function(){
    include("exercicio10.php");
});

$r->post('/exer1/resposta', function(){
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    return "A soma é: {$soma}";
});

$r->post('/exercicio1/resposta', function(){
    $numero = $_POST["numero"];
        if ($numero > 0) {
            echo "O número $numero é positivo.";
        } elseif ($numero < 0) {
            echo "O número $numero é negativo.";
        } else {
            echo "O número é igual a zero.";
        }});

$r->post('/exercicio2/resposta', function(){
    $valores = $_POST['valor'];
    $menor = $valores[0];
    for ($i=0; $i < 7; $i++) { 
        if ($menor > $valores[$i]) {
            $menor = $valores[$i];
            $posicao = $i;
        }
    }
    $posicao += 1;
    return "O menor valor é {$menor} e foi o {$posicao}º número digitado";
});

$r->post('/exercicio3/resposta', function(){
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    $soma = $valor1 + $valor2;
        if ($valor1 == $valor2) {
            $soma *= 3;
        }

    return "O resultado da soma é: {$soma}";
});

$r->post('/exercicio4/resposta', function(){
    $numero = $_POST["numero"];
    for ($i = 0; $i <= 10; $i++) {
        $resultado = $numero * $i;
        return "{$numero} X {$i} = {$resultado}<br>";
    }
});

$r->post('/exercicio5/resposta', function(){
    $numero = $_POST["numero"];
        $fatorial = 1;

        for ($i = $numero; $i >= 1; $i--) {
            $fatorial *= $i;
        }

        return "O fatorial de {$numero} é: {$fatorial}";
});

$r->post('/exercicio6/resposta', function(){
    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];

    if ($valorA == $valorB) {
        return "Números iguais: {$valorA}";
    } elseif ($valorA < $valorB) {
        return "{$valorA} {$valorB}";
    } else {
        return "{$valorB} {$valorA}";
    }
});

$r->post('/exercicio7/resposta', function(){
    $metros = $_POST["metros"];
    $centimetros = $metros * 100;

    return "{$metros} metros equivalem a {$centimetros} centímetros.";
});

$r->post('/exercicio8/resposta', function(){
    $area = $_POST["area"];
    $litros_tinta = ceil($area / 3); 
    $latas = ceil($litros_tinta / 18); 
    $preco_total = $latas * 80; 

    return "Você precisará de {$latas} latas de tinta, totalizando R$ {$preco_total}.";
});

$r->post('/exercicio9/resposta', function(){
    $ano_nascimento = $_POST["ano_nascimento"];
    $ano_atual = date("Y");
        
    $idade = $ano_atual - $ano_nascimento;        
    $dias_vividos = $idade * 365;

    $idade_2025 = 2025 - $ano_nascimento;
    return "Idade: {$idade} anos<br>";
    return "Dias vividos: {$dias_vividos} dias<br>";
    return "Idade em 2025: {$idade_2025} anos";
});

$r->post('/exercicio10/resposta', function(){
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    
    $imc = $peso / ($altura * $altura);
        
    return "Seu IMC é: $imc<br>";

    if ($imc < 18.5) {
        return "Você está abaixo do peso.";
    } elseif ($imc >= 18.5 && $imc < 25) {
        return "Seu peso está dentro da faixa considerada normal.";
    } else {
        return "Você está acima do peso.";
    }
});


#ROTAS

$resultado = $r->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

echo $resultado($r->getParams());


