<?php

class Anuncio{

    public $IdAnuncio;
    public $Nome;
    public $Src;  


    function getIdAnuncio() {
        return $this->IdAnuncio;
    }

    function getNome() {
        return $this->Nome;
    }

    function getSrc() {
        return $this->Src;
    }

    function setIdAnuncio($IdAnuncio) {
        $this->IdAnuncio = $IdAnuncio;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSrc($Src) {
        $this->Src = $Src;
    }

}

?>