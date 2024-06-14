<?php

namespace Php\Primeiroprojeto\Models\Domain;

class Disciplina{

    private $id;
    private $nome;
    private $duracao;
    private $tipo;

    public function __construct($id, $nome, $duracao, $tipo){
        $this->setId($id);
        $this->setNome($nome);
        $this->setDuracao($duracao);
        $this->setTipo($tipo);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDuracao(){
        return $this->duracao;
    }

    public function setDuracao($duracao){
        $this->duracao = $duracao;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

}
