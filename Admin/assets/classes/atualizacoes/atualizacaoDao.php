<?php
include_once 'BancodeDados.php';

class AtualizacaoDao extends BancodeDados{

    public function novaAtualizacao($atualizacao) {

        $titulo = $atualizacao->getTitulo();

        $texto = $atualizacao->getTexto();

        $descricao = $atualizacao->getDescricao();

        $publicacao = $atualizacao->getPublicacao();

        $sql = $this->conexao->prepare("INSERT INTO atualizacoes (titulo, texto, descricao, publicacao) VALUES ('$titulo',  '$texto', '$descricao', '$publicacao')");

        if($sql->execute()==true){
            $mensagem = "Atualização inserida com sucesso!";
        }else{
            $mensagem = "Erro ao inserir a Atualização";
        }

        return $mensagem;
    }

    public function select() {
        $sql = $this->conexao->prepare("SELECT * FROM atualizacoes");
        $sql->execute();
        $a = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $a;
    }

    public function editaAtualizacao($atualizacao) {

        $idAtualizacao = $atualizacao->getIdAtualizacao();

        $titulo = $atualizacao->getTitulo();

        $texto = $atualizacao->getTexto();

        $descricao = $atualizacao->getDescricao();

        $publicacao = $atualizacao->getPublicacao();

        $sql = $this->conexao->prepare("UPDATE atualizacoes SET titulo ='$titulo', texto='$texto', descricao='$descricao', publicacao='$publicacao' WHERE idAtualizacao = '$idAtualizacao'");
        
        if($sql->execute()==true){
            $mensagem = "Atualização editada com sucesso!";
        }else{
            $mensagem = "Erro ao editar a Atualização";
        }

        return $mensagem;
    }
    
    public function excluiAtualizacao($atualizacao) {
        $idAtualizacao = $atualizacao->getIdAtualizacao();

        $sql = $this->conexao->prepare("DELETE FROM atualizacoes WHERE atualizacoes.idAtualizacao = '$idAtualizacao' ");

        if($sql->execute()==true){
            $mensagem = "Atualização excluida com sucesso!";
        }else{
            $mensagem = "Erro ao excluir a Atualização";
        }

        return $mensagem;
    }
}