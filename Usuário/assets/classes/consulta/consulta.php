<?php

class Consulta{

    public $IdConsulta;
    public $Data;
    public $Horario;
    public $Descricao;
    public $Email;
    public $Endereco;
    



    function getIdConsulta() {
        return $this->IdConsulta;
    }

    function getData() {
        return $this->Data;
    }

    function getHorario() {
        return $this->Horario;
    }

    function setIdConsulta($IdConsulta) {
        $this->IdConsulta = $IdConsulta;
    }

    function setData($Data) {
        $this->Data = $Data;
    }

    function setHorario($Horario) {
        $this->Horario = $Horario;
    }

}

?>