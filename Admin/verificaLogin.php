<?php
    include_once "assets/classes/administrador/administrador.php";
    include_once "assets/classes/administrador/administradorDao.php";  
    
    session_start();

  if (isset($_POST['login']) && $_POST['senha'] != "") {

    $administrador = new Administrador();

    $administrador->setLogin($_POST['login']);
    $administrador->setSenha(md5($_POST['senha']));
   
    $adminDao = new AdminDao();

    $dados=$adminDao->verificaLogin($administrador);

    var_dump($dados);

   if($dados == NULL){
        $_SESSION['erro'] = "Insira credenciais de login validas";
        unset($_SESSION['login']);
        header("Location:index.php");
    }else{        
        $_SESSION['login'] = $_POST['login'];
        header("Location:painelControle.php");
    }    
}else{
    $_SESSION['erro'] = "Preencha todos os campos!";
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header("Location:index.php");
}


?>