<?php

class Dentista{

    public $IdDentista;
    public $CRO;
    public $Nome;
   
    function getIdDentista() {
        return $this->IdDentista;
    }

    function getCRO() {
        return $this->CRO;
    }

    function getNome() {
        return $this->Nome;
    }

    function setIdDentista($IdDentista) {
        $this->IdDentista = $IdDentista;
    }

    function setCRO($CRO) {
        $this->CRO = $CRO;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

}

?>