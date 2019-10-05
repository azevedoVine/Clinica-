<?php
include_once ('BancodeDados.php');

class AtualizacaoDao extends BancodeDados{

    public function novaAtualizacao($atualizacao) {

        $titulo = $atualizacao->getTitulo();

        $texto = $atualizacao->getTexto();

        $descricao = $atualizacao->getDescricao();

        $sql = $this->conexao->prepare("INSERT INTO atualizacoes (titulo, texto, descricao) VALUES ('$titulo',  '$texto', '$descricao')");

        return $sql->execute();
    }

    public function select() {
        $sql = $this->conexao->prepare("SELECT * FROM atualizacoes");
        $sql->execute();

        $atualizacao= array();

         while ($linha = $sql->fetch()) {

            $atualizacao = new Atualizacao();
            $atualizacao->setDescricao($linha['descricao']);
            $atualizacao->setTexto($linha['texto']);
            $atualizacao->setTitulo($linha['titulo']);
            $atualizacao->setIdAtualizacao($linha['idAtualizacao']);

            $atualizacao[] = $atualizacao;
        }
         return $atualizacao;
    }
}