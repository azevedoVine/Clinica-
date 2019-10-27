<?php

class Paciente{

    public $IdPaciente;
    public $Nome;
    public $Nascimento;
    public $Telefone;
    public $Email;
    public $Endereco;
    public $Perfil;
    public $Login;
    public $Senha;
    



    function getIdPaciente() {
        return $this->IdPaciente;
    }

    function getNome() {
        return $this->Nome;
    }

    function getNascimento() {
        return $this->Nascimento;
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

    function getPerfil() {
        return $this->Perfil;
    }

    function getLogin() {
        return $this->Login;
    }

    function getSenha() {
        return $this->Senha;
    }

    function setIdPaciente($idPaciente) {
        $this->IdPaciente = $idPaciente;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setNascimento($Nascimento) {
        $this->Nascimento = $Nascimento;
    }

    function setTelefone($Telefone) {
        $this->Telefone = $Telefone;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }
    
    function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }

    function setPerfil($Perfil) {
        $this->Perfil = $Perfil;
    }

    function setLogin($Login) {
        $this->Login = $Login;
    }

    function setSenha($Senha) {
        $this->Senha = $Senha;
    }
}

?>