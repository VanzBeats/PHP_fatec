<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\Models\DAO\DisciplinaDAO;
use Php\Primeiroprojeto\Models\Domain\Disciplina;

class DisciplinaController{

    public function inserir($params){
        require_once("../src/Views/Disciplina/inserir_disciplina.html");
    }

    public function novo($params){
        $disciplina = new Disciplina($_POST['nome'], $_POST['duracao'], $_POST['tipo']);
        $disciplinaDAO = new DisciplinaDAO();
        if ($disciplinaDAO->inserir($disciplina)){
            return "Disciplina inserida com sucesso!";
        } else {
            return "Erro ao inserir a disciplina!";
        }
    }

}
