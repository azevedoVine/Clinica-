<?php
    include_once "assets/classes/paciente/paciente.php";
    include_once "assets/classes/paciente/pacienteDao.php";  
    
    session_start();

  if (isset($_POST['login']) && $_POST['senha'] != "") {

    $paciente = new Paciente();

    $paciente->setLogin($_POST['login']);
    $paciente->setSenha(md5($_POST['senha']));
   
    $pacienteDao = new PacienteDao();

    $dados=$pacienteDao->verificaLogin($paciente);

    foreach($dados as $idPaciente){
        $id = $idPaciente['idPaciente'];
    }

   if($dados == NULL){
        $_SESSION['erro'] = "Insira credenciais de login validas";
        unset($_SESSION['login']);
        header("Location:login.php");
    }else{
        unset($_SESSION['erro']);        
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['id'] = $id;
        header("Location:perfil.php");
    }    
}else{
    $_SESSION['erro'] = "Preencha todos os campos!";
    unset($_SESSION['login']);
    unset($_SESSION['id']);
    header("Location:login.php");
}


?>