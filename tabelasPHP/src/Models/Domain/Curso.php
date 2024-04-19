<?php

namespace Php\Primeiroprojeto\Models\Domain;

class Curso{

    private $nome;
    private $codigo;
    private $cargahoraria;

    public function __construct($nome, $codigo, $cargahoraria){
        $this->setNome($nome);
        $this->setCodigo($codigo);
        $this->setCargahoraria($cargahoraria);

    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getCargahoraria(){
        return $this->cargahoraria;
    }

    public function setCargahoraria($cargahoraria){
        $this->cargahoraria = $cargahoraria;
    }

}
