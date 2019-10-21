<?php
class Sobre{

    public $idSobre;
    public $dia;
    public $manha;
    public $tarde;

    function getIdSobre() {
        return $this->idSobre;
    }

    function getDia() {
        return $this->dia;
    }

    function getManha() {
        return $this->manha;
    }

    function getTarde() {
        return $this->tarde;
    }

    function setIdSobre($idSobre) {
        $this->idSobre = $idSobre;
    }

    function setDia($dia) {
        $this->dia = $dia;
    }

    function setManha($manha) {
        $this->manha = $manha;
    }

    function setTarde($tarde) {
        $this->tarde = $tarde;
    }
} 


?>