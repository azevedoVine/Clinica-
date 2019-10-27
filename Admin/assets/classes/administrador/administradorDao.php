<?php
include_once 'C:\xampp\htdocs\Clinica-Odontologica\Admin\assets\classes\atualizacoes\BancodeDados.php';

class AdminDao extends BancodeDados{

    public function listaAdmin(){

        $sql = $this->conexao->prepare("Select * from administrador");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }

    public function editaAdmin($administrador) {

        $idAdministrador = $administrador->getIdAdmin();

        $nome = $administrador->getNome();

        $email = $administrador->getEmail();

        $categoria = $administrador->getCategoria();

        $login = $administrador->getLogin();

        $senha = $administrador->getSenha();

        $sql = $this->conexao->prepare("UPDATE administrador SET email ='$email', nome='$nome', login='$login', categoria='$categoria', senha='$senha'  WHERE idAdmin = '$idAdministrador'");


        if($sql->execute()==true){
            $mensagem = "Perfil de $nome foi editado com sucesso!";
        }else{
            $mensagem = "Erro ao editar o perfil de: $nome";
        }

        return $mensagem;
    }
}