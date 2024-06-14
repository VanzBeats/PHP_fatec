<?php

namespace Php\Primeiroprojeto\Models\Domain;

class Aluno{

    private $id;
    private $matricula;
    private $endereco;

    public function __construct($id, $matricula, $endereco){
        $this->setId($id);
        $this->setMatricula($matricula);
        $this->setEndereco($endereco);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

}
