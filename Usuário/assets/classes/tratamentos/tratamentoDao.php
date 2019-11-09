<?php
    include_once 'C:\xampp\htdocs\Clinica-Odontologica\Usuário\assets\classes\atualizacoes\BancodeDados.php';

class TratamentoDao extends BancodeDados{

    public function listaTratamentos(){
    
        $sql = $this->conexao->prepare("SELECT tratamentos.titulo, tratamentos.idTratamentos, tratamentos.descricao, tratamentos.publicacao, imagem_tratamentos.src
                                        FROM tratamentos, imagem_tratamentos
                                        WHERE imagem_tratamentos.tratamentos_idTratamentos = tratamentos.idTratamentos");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }

    public function lista2Tratamentos(){
    
        $sql = $this->conexao->prepare("SELECT tratamentos.titulo, tratamentos.idTratamentos, tratamentos.descricao, tratamentos.publicacao, imagem_tratamentos.src
                                        FROM tratamentos, imagem_tratamentos
                                        WHERE imagem_tratamentos.tratamentos_idTratamentos = tratamentos.idTratamentos LIMIT 2");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }

    public function editaTratamento($tratamento) {

        $idTratamento = $tratamento->getIdtratamento();

        $titulo = $tratamento->getTitulo();

        $descricao = $tratamento->getDescricao();

        $publicacao = $tratamento->getPublicacao();

        $sql = $this->conexao->prepare("UPDATE tratamentos SET titulo ='$titulo', descricao='$descricao', publicacao='$publicacao' WHERE idTratamentos = '$idTratamento'");
        
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