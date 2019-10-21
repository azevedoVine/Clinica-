<?php 
include_once 'C:\xampp\htdocs\Clinica-Odontologica\Admin\assets\classes\atualizacoes\BancodeDados.php';

class SobreDao extends BancodeDados{

    public function listaSobre(){

        $sql = $this->conexao->prepare("Select * from sobre");

        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }
    
    public function editaSobre($sobre) {

        $idSobre = $sobre->getIdSobre();

        $dia = $sobre->getDia();

        $manha = $sobre->getManha();

        $tarde = $sobre->getTarde();

        $sql = $this->conexao->prepare("UPDATE sobre SET dia ='$dia', manha='$manha', tarde='$tarde' WHERE idSobre = '$idSobre'");
        
        if($sql->execute()==true){
            $mensagem = "Informação editada com sucesso!";
        }else{
            $mensagem = "Erro ao editar a Informação";
        }

        return $mensagem;
    }

}

?>