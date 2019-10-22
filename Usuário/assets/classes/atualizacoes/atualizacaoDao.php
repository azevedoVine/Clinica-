<?php
include_once 'BancodeDados.php';

class AtualizacaoDao extends BancodeDados{

        public function listaAtualizacoes() {
        $sql = $this->conexao->prepare("SELECT * FROM atualizacoes");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }
        public function listaUltimaAtualizacoes() {
        $sql = $this->conexao->prepare("SELECT * FROM atualizacoes ORDER BY idAtualizacao desc LIMIT 1");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }
   
}