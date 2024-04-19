<?php

namespace Php\Primeiroprojeto\Models\Domain;

class Disciplina{

    private $nome;
    private $codigo;
    private $cargaHoraria;

    public function __construct($nome, $duracao, $tipo){
        $this->setNome($nome);
        $this->setDuracao($duracao);
        $this->setTipo($tipo);
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
