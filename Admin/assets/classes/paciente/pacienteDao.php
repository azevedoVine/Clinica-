<?php
include_once 'C:\xampp\htdocs\Clinica-Odontologica\Admin\assets\classes\atualizacoes\BancodeDados.php';

class PacienteDao extends BancodeDados{

    public function listaPacientes(){

        $sql = $this->conexao->prepare("Select * from paciente");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        return $dados;
    }

    public function inserePaciente($paciente) {

        $idPaciente = $paciente->getIdPaciente();

        $nome = $paciente->getNome();

        $tel = $paciente->getTelefone();

        $email = $paciente->getEmail();

        $end = $paciente->getEndereco();

        $nasc = $paciente->getNascimento();

        $login = $paciente->getLogin();

        $senha = $paciente->getSenha();

        $foto = $paciente->getPerfil();

        $sql = $this->conexao->prepare("INSERT INTO paciente (nome, telefone, email, endereco, nascimento, login, senha, administrador_idAdmin, fotoPerfil) VALUES ('$nome', '$tel', '$email', '$end', '$nasc', '$login', '$senha', '1', '$foto')");

        if($sql->execute()==true){
            $mensagem = "Perfil de $nome foi inserido com sucesso!";
        }else{
            $mensagem = "Erro ao inserir o perfil de: $nome";
        }

        return $mensagem;
    }

    public function editaPaciente($paciente) {

        $idPaciente = $paciente->getIdPaciente();

        $nome = $paciente->getNome();

        $tel = $paciente->getTelefone();

        $email = $paciente->getEmail();

        $nasc = $paciente->getNascimento();

        $end = $paciente->getEndereco();

        $sql = $this->conexao->prepare("UPDATE paciente SET telefone ='$tel', nome='$nome', nascimento='$nasc', endereco='$end', email='$email'  WHERE idPaciente = '$idPaciente'");


        if($sql->execute()==true){
            $mensagem = "Perfil de $nome foi editado com sucesso!";
        }else{
            $mensagem = "Erro ao editar o perfil de: $nome";
        }

        return $mensagem;
    }

    public function excluiPaciente($paciente) {
        $idPaciente = $paciente->getIdPaciente();

        $sql = $this->conexao->prepare("DELETE FROM paciente WHERE paciente.idPaciente = '$idPaciente' ");

        if($sql->execute()==true){
            $mensagem = "Perfil do paciente excluido com sucesso!";
        }else{
            $mensagem = "Erro ao excluir o perfil do paciente";
        }

        return $mensagem;
    }




}
