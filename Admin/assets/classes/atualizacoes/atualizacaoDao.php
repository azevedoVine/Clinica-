<?php
include_once 'BancodeDados.php';

class AtualizacaoDao extends BancodeDados{

    public function novaAtualizacao($atualizacao) {

        $titulo = $atualizacao->getTitulo();

        $texto = $atualizacao->getTexto();

        $descricao = $atualizacao->getDescricao();

        $sql = $this->conexao->prepare("INSERT INTO atualizacoes (titulo, texto, descricao) VALUES ('$titulo',  '$texto', '$descricao')");

        if($sql->execute()==true){

            $teste=false;}
        else{
            $teste=false;
        }

        return $teste;
    }

    public function select() {
        $sql = $this->conexao->prepare("SELECT * FROM atualizacoes");
        $sql->execute();
        $a = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $a;
    }

    public function selectById($atualizacao) {
        echo "CARALEO";
        $sql = $this->conexao->prepare("SELECT * FROM atualizacoes WHERE idAtualizacao = :idAtualizacao");
        
        $sql->bindValue(':idAtualizacao', $atualizacao);
        $sql->execute();
        
        $linha = $sql->fetch();

        $atualizacao = new Atualizacao();
        $atualizacao->setTexto($linha['texto']);
        $atualizacao->setTitulo($linha['titulo']);
        $atualizacao->setDescricao($linha['descricao']);
        $atualizacao->setIdAtualizacao($linha['idAtualizacao']);
        
        return $atualizacao;
    }
}