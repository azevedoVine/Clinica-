<?php
    include_once 'C:\xampp\htdocs\Clinica-Odontologica\Admin\assets\classes\atualizacoes\BancodeDados.php';

class TratamentoDao extends BancodeDados{

    public function insereTratamento($tratamento){

        $titulo = $tratamento->getTitulo();

        $texto = $tratamento->getTexto();

        $descricao = $tratamento->getDescricao();

        $publicacao = $tratamento->getPublicacao();


        $sql = $this->conexao->prepare("INSERT INTO tratamentos (titulo, texto, descricao, publicacao) VALUES ('$titulo',  '$texto', '$descricao', '$publicacao')");

        if($sql->execute()==true){
            $mensagem = "Tratamento inserido com sucesso!";
        }else{
            $mensagem = "Erro ao inserir o tratamento";
        }

        return $mensagem;
    }

    public function listaTratamentos(){
    
        $sql = $this->conexao->prepare("SELECT * FROM tratamentos");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }

}




?>