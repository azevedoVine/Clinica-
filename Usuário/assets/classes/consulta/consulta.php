<?php

class Consulta{

    public $IdConsulta;
    public $Data;
    public $Horario;
    public $Paciente;
    public $Dentista;



    function getIdConsulta() {
        return $this->IdConsulta;
    }

    function getData() {
        return $this->Data;
    }

    function getHorario() {
        return $this->Horario;
    }

    function getPaciente() {
        return $this->Paciente;
    }
    function getDentista() {
        return $this->Dentista;
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

    function setPaciente($Paciente) {
        $this->Paciente = $Paciente;
    }

    function setDentista($Dentista) {
        $this->Dentista = $Dentista;
    }

}

?>