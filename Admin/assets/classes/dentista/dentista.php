<?php

class Dentista{

    public $IdDentista;
    public $CRO;
    public $Nome;
    public $Perfil;
   
    function getIdDentista() {
        return $this->IdDentista;
    }

    function getCRO() {
        return $this->CRO;
    }

    function getNome() {
        return $this->Nome;
    }

    function getPerfil() {
        return $this->Perfil;
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
    
    function setPerfil($Perfil) {
        $this->Perfil = $Perfil;
    }

}

?>