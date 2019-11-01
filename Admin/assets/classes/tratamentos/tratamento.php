<?php

class Tratamento{

    public $IdTratamento;
    public $Titulo;
    public $Descricao;
    public $Publicacao;
    public $Imagem;


    function getIdTratamento() {
        return $this->IdTratamento;
    }

    function getTitulo() {
        return $this->Titulo;
    }

    function getDescricao() {
        return $this->Descricao;
    }

    function getPublicacao() {
        return $this->Publicacao;
    }

    function getImagem() {
        return $this->Imagem;
    }

    function setIdTratamento($IdTratamento) {
        $this->IdTratamento= $IdTratamento;
    }

    function setTitulo($Titulo) {
        $this->Titulo = $Titulo;
    }

    function setDescricao($Descricao) {
        $this->Descricao = $Descricao;
    }

    function setPublicacao($Publicacao) {
        $this->Publicacao = $Publicacao;
    }

    function setImagem($Imagem) {
        $this->Imagem = $Imagem;
    }
}

?>