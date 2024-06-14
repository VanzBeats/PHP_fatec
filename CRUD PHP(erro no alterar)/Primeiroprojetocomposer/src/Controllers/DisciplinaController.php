<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\Models\DAO\DisciplinaDAO;
use Php\Primeiroprojeto\Models\Domain\Disciplina;

class DisciplinaController{

    public function index($params){
        $disciplinaDAO = new DisciplinaDAO();
        $resultado = $disciplinaDAO->consultarTodos();
        $acao = $params[1] ?? "";
        $status = $params[2] ?? "";
        if($acao == "inserir" && $status == "true")
            $mensagem = "Registro inserido com sucesso!";
        elseif($acao == "inserir" && $status == "false")
            $mensagem = "Erro ao inserir!";
        elseif($acao == "alterar" && $status == "true")
            $mensagem = "Registro alterado com sucesso!";
        elseif($acao == "alterar" && $status == "false")
            $mensagem = "Erro ao alterar!";
        elseif($acao == "excluir" && $status == "true")
            $mensagem = "Registro excluído com sucesso!";
        elseif($acao == "excluir" && $status == "false")
            $mensagem = "Erro ao excluir!";
        else 
            $mensagem = "";
        require_once("../src/Views/disciplina/disciplina.php");
    }
    
    public function inserir($params){
        require_once("../src/Views/disciplina/inserir_disciplina.html");
    }

    public function novo($params){
        $disciplina = new Disciplina(0, $_POST['nome'], $_POST['duracao'], $_POST['tipo']);
        $disciplinaDAO = new DisciplinaDAO();
        if ($disciplinaDAO->inserir($disciplina)){
            header("location: /disciplina/inserir/true");
        } else {
            header("location: /disciplina/inserir/false");
        }
    }

    public function alterar($params){
        $disciplinaDAO = new DisciplinaDAO();
        $resultado = $disciplinaDAO->consultar($params[1]);
        require_once("../src/Views/disciplina/alterar_disciplina.php");
    }

    public function excluir($params){
        $disciplinaDAO = new DisciplinaDAO();
        $resultado = $disciplinaDAO->consultar($params[1]);
        require_once("../src/Views/disciplina/excluir_disciplina.php");
    }

    public function editar($params){
        $disciplina = new Disciplina($_POST['id'], $_POST['nome'], $_POST['duracao'], $_POST['tipo']);
        $disciplinaDAO = new DisciplinaDAO();
        if ($disciplinaDAO->alterar($disciplina)) {
            header("location: /disciplina/alterar/true");
        } else {
            header("location: /disciplina/alterar/false");
        }
    }

    public function deletar($params){
        $disciplinaDAO = new DisciplinaDAO();
        if ($disciplinaDAO->excluir($_POST['id'])){
            header("location: /disciplina/excluir/true");
        } else {
            header("location: /disciplina/excluir/false");
        }
    }

}
