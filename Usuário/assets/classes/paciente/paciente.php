<?php

class Paciente{

    public $IdPaciente;
    public $Nome;
    public $Idade;
    public $Telefone;
    public $Email;
    public $Endereco;
    



    function getIdPaciente() {
        return $this->IdPaciente;
    }

    function getNome() {
        return $this->Nome;
    }

    function getIdade() {
        return $this->Idade;
    }

    function getTelefone() {
        return $this->Telefone;
    }

    function getEmail() {
        return $this->Email;
    }

    function getEndereco() {
        return $this->Endereco;
    }

    function setIdPaciente($idPaciente) {
        $this->IdPaciente = $idPaciente;
    }

    function setNome($Titulo) {
        $this->Titulo = $Titulo;
    }

    function setIdade($Idade) {
        $this->Idade = $Idade;
    }

    function setTelefone($Telefone) {
        $this->Telefone = $Telefone;
    }
}

?>