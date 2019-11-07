<?php
include_once 'BancodeDados.php';

class AtualizacaoDao extends BancodeDados{

        public function listaAtualizacoes() {
            $sql = $this->conexao->prepare("SELECT atualizacoes.titulo, atualizacoes.texto, atualizacoes.idAtualizacao, atualizacoes.descricao, atualizacoes.publicacao, imagem_atualizacoes.src
                                            FROM atualizacoes, imagem_atualizacoes
                                            WHERE imagem_atualizacoes.atualizacoes_idAtualizacao = atualizacoes.idAtualizacao");
            $sql->execute();
            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
        
            return $dados;
        }
        
        public function lista3Atualizacoes() {
            $sql = $this->conexao->prepare("SELECT atualizacoes.titulo, atualizacoes.texto, atualizacoes.idAtualizacao, atualizacoes.descricao, atualizacoes.publicacao, imagem_atualizacoes.src
                                            FROM atualizacoes, imagem_atualizacoes
                                            WHERE imagem_atualizacoes.atualizacoes_idAtualizacao = atualizacoes.idAtualizacao LIMIT 3");
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