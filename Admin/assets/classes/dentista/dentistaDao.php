<?php
include_once 'C:\xampp\htdocs\Clinica-Odontologica\Admin\assets\classes\atualizacoes\BancodeDados.php';

class DentistaDao extends BancodeDados{

    public function listaDentistas(){

        $sql = $this->conexao->prepare("Select * from dentista");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    } 




}