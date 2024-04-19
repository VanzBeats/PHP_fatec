<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\Models\DAO\CursoDAO;
use Php\Primeiroprojeto\Models\Domain\Curso;

class CursoController{

    public function inserir($params){
        require_once("../src/Views/Curso/inserir_curso.html");
    }

    public function novo($params){
        $curso = new Curso($_POST['nome'], $_POST['codigo'], $_POST['cargahoraria']);
        $cursoDAO = new CursoDAO();
        if ($cursoDAO->inserir($curso)){
            return "Curso inserido com sucesso!";
        } else {
            return "Erro ao inserir o curso!";
        }
    }

}
