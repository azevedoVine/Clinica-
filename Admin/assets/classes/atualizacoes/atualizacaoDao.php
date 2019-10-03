<?php
include_once ('BancodeDados.php');

class AtualizacaoDao extends BancodeDados{

    public function novaAtualizacao($atualizacao) {
        $sql = $this->conexao->prepare("INSERT INTO atualizacoes (titulo, texto, descricao, administrador_idAdmin) VALUES (:titulo,  :texto, :descricao)");

        $sql->bindValue(':titulo', $atualizacao->getTitulo());

        $sql->bindValue(':texto', $atualizacao->getTexto());

        $sql->bindValue(':descricao', $atualizacao->getDescricao());


        return $sql->execute();
    }
}