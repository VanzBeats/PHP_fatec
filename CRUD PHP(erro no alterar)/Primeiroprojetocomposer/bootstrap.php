<?php

require __DIR__."/vendor/autoload.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

#use Php\Primeiroprojeto\Router
$r = new Php\Primeiroprojeto\Router($metodo, $caminho);

#ROTAS

$r->get('/olamundo', 
    'Php\Primeiroprojeto\Controllers\HomeController@olaMundo');

$r->get('/olapessoa/{nome}', function($params){ 
    return 'Olá'.$params[1]; 
} );

$r->get('/exer1/formulario', 
    'Php\Primeiroprojeto\Controllers\HomeController@formExer1');

$r->post('/exer1/resposta', function(){
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    return "A soma é: {$soma}";
});

$r->get('/exer4/formulario', function(){
    require_once('exer4.html');
});

$r->post('/exer4/resposta', function(){
    $valor = $_POST['valor1'];
    $resposta = "";
    for ($i=1; $i<=10; $i++){
        $resultado = $valor * $i;
        $resposta .= "$valor x $i = $resultado<br/>";
    }
    return $resposta;
});

// Aluno
$r->get('/aluno/inserir',
    'Php\Primeiroprojeto\Controllers\AlunoController@inserir');

$r->post('/aluno/novo',
    'Php\Primeiroprojeto\Controllers\AlunoController@novo');

$r->get('/aluno', 
    'Php\Primeiroprojeto\Controllers\AlunoController@index');

$r->get('/aluno/{acao}/{status}', 
    'Php\Primeiroprojeto\Controllers\AlunoController@index');

$r->get('/aluno/alterar/id/{id}',
    'Php\Primeiroprojeto\Controllers\AlunoController@alterar');

$r->get('/aluno/excluir/id/{id}',
    'Php\Primeiroprojeto\Controllers\AlunoController@excluir');

$r->post('/aluno/alterar',
    'Php\Primeiroprojeto\Controllers\AlunoController@alterar');

$r->post('/aluno/deletar',
    'Php\Primeiroprojeto\Controllers\AlunoController@deletar');

// Curso
$r->get('/curso/inserir',
    'Php\Primeiroprojeto\Controllers\CursoController@inserir');

$r->post('/curso/novo',
    'Php\Primeiroprojeto\Controllers\CursoController@novo');

$r->get('/curso', 
    'Php\Primeiroprojeto\Controllers\CursoController@index');

$r->get('/curso/{acao}/{status}', 
    'Php\Primeiroprojeto\Controllers\CursoController@index');

$r->get('/curso/alterar/id/{id}',
    'Php\Primeiroprojeto\Controllers\CursoController@alterar');

$r->get('/curso/excluir/id/{id}',
    'Php\Primeiroprojeto\Controllers\CursoController@excluir');

$r->post('/curso/alterar',
    'Php\Primeiroprojeto\Controllers\CursoController@alterar');

$r->post('/curso/deletar',
    'Php\Primeiroprojeto\Controllers\CursoController@deletar');

// Professor
$r->get('/professor/inserir',
    'Php\Primeiroprojeto\Controllers\ProfessorController@inserir');

$r->post('/professor/novo',
    'Php\Primeiroprojeto\Controllers\ProfessorController@novo');

$r->get('/professor', 
    'Php\Primeiroprojeto\Controllers\ProfessorController@index');

$r->get('/professor/{acao}/{status}', 
    'Php\Primeiroprojeto\Controllers\ProfessorController@index');

$r->get('/professor/alterar/id/{id}',
    'Php\Primeiroprojeto\Controllers\ProfessorController@alterar');

$r->get('/professor/excluir/id/{id}',
    'Php\Primeiroprojeto\Controllers\ProfessorController@excluir');

$r->post('/professor/alterar',
    'Php\Primeiroprojeto\Controllers\ProfessorController@alterar');

$r->post('/professor/deletar',
    'Php\Primeiroprojeto\Controllers\ProfessorController@deletar');

// Disciplina
$r->get('/disciplina/inserir',
    'Php\Primeiroprojeto\Controllers\DisciplinaController@inserir');

$r->post('/disciplina/novo',
    'Php\Primeiroprojeto\Controllers\DisciplinaController@novo');

$r->get('/disciplina', 
    'Php\Primeiroprojeto\Controllers\DisciplinaController@index');

$r->get('/disciplina/{acao}/{status}', 
    'Php\Primeiroprojeto\Controllers\DisciplinaController@index');

$r->get('/disciplina/alterar/id/{id}',
    'Php\Primeiroprojeto\Controllers\DisciplinaController@alterar');

$r->get('/disciplina/excluir/id/{id}',
    'Php\Primeiroprojeto\Controllers\DisciplinaController@excluir');

$r->post('/disciplina/alterar',
    'Php\Primeiroprojeto\Controllers\DisciplinaController@alterar');

$r->post('/disciplina/deletar',
    'Php\Primeiroprojeto\Controllers\DisciplinaController@deletar');


$resultado = $r->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

if ($resultado instanceof Closure){
    echo $resultado($r->getParams());
} elseif (is_string($resultado)){
    $resultado = explode("@", $resultado);
    $controller = new $resultado[0];
    $resultado = $resultado[1];
    echo $controller->$resultado($r->getParams());
}



