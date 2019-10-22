<?php
include_once 'C:\xampp\htdocs\Clinica-Odontologica\Usuário\assets\classes\atualizacoes\BancodeDados.php';

class DentistaDao extends BancodeDados{

    public function listaDentistas(){

        $sql = $this->conexao->prepare("Select * from dentista");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }

    public function lista3Dentistas(){

        $sql = $this->conexao->prepare("SELECT * FROM dentista ORDER BY idDentista desc LIMIT 3");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }
    
    public function editaDentista($dentista) {

        $idDentista = $dentista->getIdDentista();

        $cro = $dentista->getCRO();

        $nome = $dentista->getNome();

        $foto = $dentista->getPerfil();

        $sql = $this->conexao->prepare("UPDATE dentista SET cro ='$cro', nomeDentista='$nome', perfilDentista='$foto' WHERE idDentista = '$idDentista'");


        if($sql->execute()==true){
            $mensagem = "Perfil de $nome foi editado com sucesso!";
        }else{
            $mensagem = "Erro ao editar o perfil de: $nome";
        }

        return $mensagem;
    }

    public function insereDentista($dentista) {

        $idDentista = $dentista->getIdDentista();

        $cro = $dentista->getCRO();

        $nome = $dentista->getNome();

        $foto = $dentista->getPerfil();

        $sql = $this->conexao->prepare("INSERT INTO dentista (cro, nomeDentista, perfilDentista) VALUES ('$cro', '$nome', '$foto')");

        
        if($sql->execute()==true){
            $mensagem = "Perfil de $nome foi inserido com sucesso!";
        }else{
            $mensagem = "Erro ao inserir o perfil de: $nome";
        }

        return $mensagem;
    }

    public function excluiDentista($dentista) {
        $idDentista = $dentista->getIdDentista();

        $sql = $this->conexao->prepare("DELETE FROM dentista WHERE dentista.idDentista = '$idDentista' ");

        if($sql->execute()==true){
            $mensagem = "Perfil do dentista excluido com sucesso!";
        }else{
            $mensagem = "Erro ao excluir o perfil do Dentista";
        }

        return $mensagem;
    }


}