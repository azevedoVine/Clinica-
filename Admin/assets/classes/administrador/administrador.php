<?php

class Administrador{

    public $IdAdmin;
    public $Nome;
    public $Categoria;
    public $Email;
    public $Login;
    public $Senha;
    



    function getIdAdmin() {
        return $this->IdAdmin;
    }

    function getNome() {
        return $this->Nome;
    }

    function getCategoria() {
        return $this->Categoria;
    }

    function getEmail() {
        return $this->Email;
    }

    function getLogin() {
        return $this->Login;
    }

    function getSenha() {
        return $this->Senha;
    }

    function setIdAdmin($idAdmin) {
        $this->IdAdmin = $idAdmin;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setCategoria($Categoria) {
        $this->Categoria = $Categoria;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }
    
    function setLogin($Login) {
        $this->Login = $Login;
    }

    function setSenha($Senha) {
        $this->Senha = $Senha;
    }
}

?>