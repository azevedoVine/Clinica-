<?php

class Tratamento{

    public $IdTratamento;
    public $Titulo;
    public $Texto;
    public $Descricao;
    public $Publicacao;


    function getIdTratamento() {
        return $this->IdTratamento;
    }

    function getTitulo() {
        return $this->Titulo;
    }

    function getTexto() {
        return $this->Texto;
    }

    function getDescricao() {
        return $this->Descricao;
    }

    function getPublicacao() {
        return $this->Publicacao;
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

    function setPublicacao($Publicacao) {
        $this->Publicacao = $Publicacao;
    }
}

?>