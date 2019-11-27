<?php
include_once 'C:\xampp\htdocs\Clinica-Odontologica\Usuário\assets\classes\atualizacoes\BancodeDados.php';

class AnuncioDao extends BancodeDados{

    public function listaAnuncios(){

        $sql = $this->conexao->prepare("Select * from anuncios");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }
    
    public function novoAnuncio($anuncio) {

        $nome = $anuncio->getNome();

        $imagem = $anuncio->getSrc();

        $sql = $this->conexao->prepare("INSERT INTO anuncios (nome, src,administrador_idAdmin) VALUES ('$nome', '$imagem','1')");

        if($sql->execute()==true){
            $mensagem = "Anúncio inserido com sucesso!";
        }else{
            $mensagem = "Erro ao inserir o Anúncio";
        }

        return $mensagem;
    }

    public function excluiAnuncio($anuncio) {
        $idAnuncio = $anuncio->getIdAnuncio();

        $sql = $this->conexao->prepare("DELETE FROM anuncios WHERE anuncios.idAnuncio = '$idAnuncio'");

        if($sql->execute()==true){
            $mensagem = "Anuncio excluido com sucesso!";
        }else{
            $mensagem = "Erro ao excluir o Anuncio";
        }

        return $mensagem;
    }



}