<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Disciplina;

class DisciplinaDAO{

    private $conexao;

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
            return false;
        }
    }

    public function alterar(Disciplina $disciplina){
        try{
            $sql = "UPDATE disciplina SET nome = :nome, duracao = :duracao, tipo = :tipo WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $disciplina->getNome());
            $p->bindValue(":duracao", $disciplina->getDuracao());
            $p->bindValue(":tipo", $disciplina->getTipo());
            $p->bindValue(":id", $disciplina->getId());
            return $p->execute();
        }catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM disciplina WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultarTodos(){
        try{
            $sql = "SELECT * FROM disciplina";
            return $this->conexao->getConexao()->query($sql);
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar($id){
        try{
            $sql = "SELECT * FROM disciplina WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return false;
        }
    }

}
