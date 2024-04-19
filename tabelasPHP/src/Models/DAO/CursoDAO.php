<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Curso;

class CursoDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Curso $curso){
        try{
            $sql = "INSERT INTO curso (nome, codigo, cargahoraria) VALUES (:nome, :codigo, :cargahoraria)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $curso->getNome());
            $p->bindValue(":codigo", $curso->getCodigo());
            $p->bindValue(":cargahoraria", $curso->getCargahoraria());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }
}
