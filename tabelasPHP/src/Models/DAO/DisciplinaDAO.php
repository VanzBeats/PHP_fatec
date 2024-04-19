<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Disciplina;

class DisciplinaDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Disciplina $disciplina){
        try{
            $sql = "INSERT INTO disciplina (nome, duracao, tipo) VALUES (:nome, :duracao, :tipo)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $disciplina->getNome());
            $p->bindValue(":duracao", $disciplina->getDuracao());
            $p->bindValue(":tipo", $disciplina->getTipo());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }
}

