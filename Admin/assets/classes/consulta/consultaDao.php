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

    public function cancelaConsulta($consulta) {
        $idConsulta = $consulta->getIdConsulta();

        $sql = $this->conexao->prepare("DELETE FROM consulta WHERE consulta.idConsulta = '$idConsulta' ");

        if($sql->execute()==true){
            $mensagem = "Consulta cancelada com sucesso!";
        }else{
            $mensagem = "Erro ao cancelar a consulta";
        }

        return $mensagem;
    }


}