<?php

class Atualizacao{

    public $IdAtualizacao;
    public $Titulo;
    public $Texto;
    public $Descricao;  
    public $Publicacao;  



    function getIdAtualizacao() {
        return $this->IdAtualizacao;
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


    function setIdAtualizacao($IdAtualizacao) {
        $this->IdAtualizacao = $IdAtualizacao;
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