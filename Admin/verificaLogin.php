<?php
    include_once "assets/classes/administrador/administrador.php";
    include_once "assets/classes/administrador/administradorDao.php";  
    
    session_start();

  if (isset($_POST['login']) && $_POST['senha'] != "") {

    $administrador = new Administrador();

    $administrador->setLogin($_POST['login']);
    $administrador->setSenha($_POST['senha']);
   
    $adminDao = new AdminDao();

    $dados=$adminDao->verificaLogin($administrador);

   if($dados != ""){        
        $_SESSION['login'] = $_POST['login'];
        header("Location:painelControle.php");
    }else{
        unset($_SESSION['login']);
        header("Location:index.php");
    }
    
}else{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    $msg = "Insira credenciais de login válidas!";
    header("Location:index.php");
}


?>