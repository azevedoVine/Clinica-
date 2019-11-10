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

    public function verificaCadastro($paciente){

        $email = $paciente->getEmail();

        $login = $paciente->getLogin();

        $sql = $this->conexao->prepare("Select idPaciente from paciente WHERE email='$email'");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

        if(empty($dados)){
            $sql = $this->conexao->prepare("Select idPaciente from paciente WHERE login='$login'");
            $sql->execute();
            $dados1 = $sql->fetchAll(PDO::FETCH_ASSOC);
                if(empty($dados1)){
                    $msg = "";
                }else{
                    $msg = "O login inserido já esta cadastado no sistema!";
                }
        }else{
            $msg = "O email inserido já esta cadastado no sistema!";
        }
    
        return $msg;
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
