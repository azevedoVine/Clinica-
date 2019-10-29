<?php
include_once 'C:\xampp\htdocs\Clinica-Odontologica\Admin\assets\classes\atualizacoes\BancodeDados.php';

class ConsultaDao extends BancodeDados{

    public function listaConsultas(){

        $sql = $this->conexao->prepare("Select * from consulta c
        inner join dentista d
        on d.idDentista = c.Dentista_idDentista
        
        inner join paciente p
        on p.idPaciente = c.paciente_idPaciente");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    } 

    public function novaConsultaLista(){

        $sql = $this->conexao->prepare("Select * from dentista ORDER BY nomeDentista");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }


}