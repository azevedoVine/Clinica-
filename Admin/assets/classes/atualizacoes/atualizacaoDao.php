<?php
include_once 'BancodeDados.php';

class AtualizacaoDao extends BancodeDados{

    public function novaAtualizacao($atualizacao) {

        $titulo = $atualizacao->getTitulo();

        $texto = $atualizacao->getTexto();

        $descricao = $atualizacao->getDescricao();

        $publicacao = $atualizacao->getPublicacao();

        $imagem = $atualizacao->getImagem();

        $sql = $this->conexao->prepare("INSERT INTO atualizacoes (titulo, texto, descricao, publicacao,administrador_idAdmin) VALUES ('$titulo',  '$texto', '$descricao', '$publicacao','1')");

        if($sql->execute()==true){
            $mensagem = "Atualização inserida com sucesso!";
        }else{
            $mensagem = "Erro ao inserir a Atualização";
        }

        $last_id = $this->conexao->lastInsertId();

     
        $sql = $this->conexao->prepare("INSERT INTO imagem_atualizacoes (titulo,src,atualizacoes_idAtualizacao) VALUES ('$titulo','$imagem','$last_id')");

        if($sql->execute()==true){
            $mensagem = "Atualização inserida com sucesso!";
        }else{
            $mensagem = "Erro ao inserir a Atualização";
        }

        return $mensagem;
    }

    public function listaAtualizacoes() {
        $sql = $this->conexao->prepare("SELECT atualizacoes.titulo, atualizacoes.texto, atualizacoes.idAtualizacao, atualizacoes.descricao, atualizacoes.publicacao, imagem_atualizacoes.src
                                        FROM atualizacoes, imagem_atualizacoes
                                        WHERE imagem_atualizacoes.atualizacoes_idAtualizacao = atualizacoes.idAtualizacao");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
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

        $sql = $this->conexao->prepare("SELECT * FROM imagem_atualizacoes WHERE atualizacoes_idAtualizacao='$idAtualizacao'");
        
        if($sql->execute()==true){
            $sql = $this->conexao->prepare("DELETE FROM imagem_atualizacoes WHERE imagem_atualizacoes.atualizacoes_idAtualizacao = '$idAtualizacao' ");
            $sql->execute();
        }        

        $sql1 = $this->conexao->prepare("DELETE FROM atualizacoes WHERE atualizacoes.idAtualizacao = '$idAtualizacao' ");

        if($sql1->execute()==true){
            $mensagem = "Atualização excluida com sucesso!";
        }else{
            $mensagem = "Erro ao excluir a Atualização";
        }

        return $mensagem;
    }
}