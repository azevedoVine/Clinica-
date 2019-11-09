<?php
include_once 'C:\xampp\htdocs\Clinica-Odontologica\Admin\assets\classes\atualizacoes\BancodeDados.php';

class PacienteDao extends BancodeDados{

    public function verificaLogin($paciente){

        $login = $paciente->getLogin();

        $senha = $paciente->getSenha();

        $sql = $this->conexao->prepare("Select idPaciente from paciente WHERE login='$login' AND senha='$senha' ");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }

    public function listaPacientesID($paciente){

        $idPaciente= $paciente->getIdPaciente();

        $sql = $this->conexao->prepare("Select * from paciente WHERE idPaciente ='$idPaciente'");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }

    
    public function editaPaciente($paciente) {

        $idPaciente = $paciente->getIdPaciente();

        $nome = $paciente->getNome();

        $login = $paciente->getLogin();

        $senha = $paciente->getSenha();

        $tel = $paciente->getTelefone();

        $email = $paciente->getEmail();

        $nasc = $paciente->getNascimento();

        $end = $paciente->getEndereco();

        $sql = $this->conexao->prepare("UPDATE paciente SET senha='$senha', login ='$login', telefone ='$tel', nome='$nome', nascimento='$nasc', endereco='$end', email='$email'  WHERE idPaciente = '$idPaciente'");

        if($sql->execute()==true){
            $mensagem = "Perfil de $nome foi editado com sucesso!";
        }else{
            $mensagem = "Erro ao editar o perfil de: $nome";
        }

        return $mensagem;
    }
}
