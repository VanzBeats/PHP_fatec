<?php

namespace Php\Primeiroprojeto\Models\Domain;

class Curso{

    private $id;
    private $nome;
    private $codigo;
    private $cargaHoraria;

    public function __construct($id, $nome, $codigo, $cargaHoraria){
        $this->setId($id);
        $this->setNome($nome);
        $this->setCodigo($codigo);
        $this->setCargaHoraria($cargaHoraria);
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

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getCargaHoraria(){
        return $this->cargaHoraria;
    }

    public function setCargaHoraria($cargaHoraria){
        $this->cargaHoraria = $cargaHoraria;
    }

}
