<?php
include_once ('BancodeDados.php');

class AtualizacaoDao extends BancodeDados{

    public function novaAtualizacao($atualizacao) {

        $titulo = $atualizacao->getTitulo();

        $texto = $atualizacao->getTexto();

        $descricao = $atualizacao->getDescricao();

        $sql = $this->conexao->prepare("INSERT INTO atualizacoes (titulo, texto, descricao) VALUES ('$titulo',  '$texto', '$descricao')");

        

        var_dump($sql);
        return $sql->execute();
    }
}