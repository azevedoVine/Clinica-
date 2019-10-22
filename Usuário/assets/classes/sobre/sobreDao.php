<?php 
include_once 'C:\xampp\htdocs\Clinica-Odontologica\Admin\assets\classes\atualizacoes\BancodeDados.php';

class SobreDao extends BancodeDados{

    public function listaSobre(){

        $sql = $this->conexao->prepare("Select * from sobre");

        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }
}

?>