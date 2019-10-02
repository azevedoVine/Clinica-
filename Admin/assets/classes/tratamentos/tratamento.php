<?php

class Tratamento{

    public $IdTratamento;
    public $Titulo;
    public $Texto;
    public $Descricao;


    function getIdTratamento() {
        return $this->IdTratamento;
    }

    function getTitulo() {
        return $this->idTitulo;
    }

    function getTexto() {
        return $this->Texto;
    }

    function getDescricao() {
        return $this->Descricao;
    }

    function setIdTratamento($IdTratamento) {
        $this->IdTratamento= $IdTratamento;
    }

    function setTitulo($Titulo) {
        $this->Titulo = $Titulo;
    }

    function setTexto($Texto) {
        $this->Texto = $Texto;
    }

    function setDescricao($Descricao) {
        $this->Descricao = $Descricao;
    }

}

?>