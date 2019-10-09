<?php
include_once 'BancodeDados.php';

class AtualizacaoDao extends BancodeDados{

    public function novaAtualizacao($atualizacao) {

        $titulo = $atualizacao->getTitulo();

        $texto = $atualizacao->getTexto();

        $descricao = $atualizacao->getDescricao();

        $sql = $this->conexao->prepare("INSERT INTO atualizacoes (titulo, texto, descricao) VALUES ('$titulo',  '$texto', '$descricao')");

        if($sql->execute()==true){

            $teste="Inserido com sucesso";}
        else{
            $teste="";
        }

        return $teste;
    }

    public function select() {
        $sql = $this->conexao->prepare("SELECT * FROM atualizacoes");
        $sql->execute();
        $a = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $a;
    }
}