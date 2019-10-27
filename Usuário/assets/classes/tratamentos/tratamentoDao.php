<?php
    include_once 'C:\xampp\htdocs\Clinica-Odontologica\Admin\assets\classes\atualizacoes\BancodeDados.php';

class TratamentoDao extends BancodeDados{

    public function insereTratamento($tratamento){

        $titulo = $tratamento->getTitulo();

        $texto = $tratamento->getTexto();

        $descricao = $tratamento->getDescricao();

        $publicacao = $tratamento->getPublicacao();

        $imagem = $tratamento->getImagem();


        $sql = $this->conexao->prepare("INSERT INTO tratamentos (titulo, texto, descricao, publicacao) VALUES ('$titulo',  '$texto', '$descricao', '$publicacao')");

        var_dump($sql);

        if($sql->execute()==true){
            $mensagem = "Tratamento inserido com sucesso!";
        }else{
            $mensagem = "Erro ao inserir o tratamento";
        }

        $last_id = $this->conexao->lastInsertId();

        $sql = $this->conexao->prepare("INSERT INTO imagem_tratamentos (titulo, src, tratamentos_idTratamentos) VALUES ('$titulo',  '$imagem', '$last_id')");

        if($sql->execute()==true){
            $mensagem = "Tratamento inserido com sucesso!";
        }else{
            $mensagem = "Erro ao inserir o tratamento";
        }

        return $mensagem;
    }

    public function listaTratamentos(){
    
        $sql = $this->conexao->prepare("SELECT tratamentos.titulo, tratamentos.texto, tratamentos.idTratamentos, tratamentos.descricao, tratamentos.publicacao, imagem_tratamentos.src
                                        FROM tratamentos, imagem_tratamentos
                                        WHERE imagem_tratamentos.tratamentos_idTratamentos = tratamentos.idTratamentos");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }
    
    public function editaTratamento($tratamento) {

        $idTratamento = $tratamento->getIdtratamento();

        $titulo = $tratamento->getTitulo();

        $texto = $tratamento->getTexto();

        $descricao = $tratamento->getDescricao();

        $publicacao = $tratamento->getPublicacao();

        $sql = $this->conexao->prepare("UPDATE tratamentos SET titulo ='$titulo', texto='$texto', descricao='$descricao', publicacao='$publicacao' WHERE idTratamentos = '$idTratamento'");
        
        if($sql->execute()==true){
            $mensagem = "Tratamento '$titulo' editado com sucesso!";
        }else{
            $mensagem = "Erro ao editar '$titulo'";
        }

        return $mensagem;
    }

    public function excluiTratamento($tratamento) {
        $idTratamento = $tratamento->getIdTratamento();

        $sql = $this->conexao->prepare("DELETE FROM `imagem_tratamentos` WHERE imagem_tratamentos.tratamentos_idTratamentos = '$idTratamento' ");

        if($sql->execute()==true){
            $mensagem = "Tratamento excluído com sucesso!";
        }else{
            $mensagem = "Erro ao excluir o Tratamento";
        }

        $sql = $this->conexao->prepare("DELETE FROM `tratamentos` WHERE tratamentos.idTratamentos = '$idTratamento' ");

        if($sql->execute()==true){
            $mensagem = "Tratamento excluído com sucesso!";
        }else{
            $mensagem = "Erro ao excluir o Tratamento";
        }

        return $mensagem;
    }

}




?>