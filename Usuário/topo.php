<html>
<!DOCTYPE html>
<head>
        <title>Clínica ABC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">	  
        <link rel="stylesheet" type="text/css" href="assets/css/all.css">
		    <link rel="stylesheet" href="assets/css/bxslider.css">        
        <link rel="stylesheet" href="assets/css/theme1.css"/>
        <link rel="stylesheet" href="assets/css/fullcalendar.css">
        
		<link rel="icon" type="image/png" sizes="32x32" href="assets/img/Logo.png">

    </head>
    <body>
    <nav>
            <ul class="menu">
                <a href="index.php"><img id="logo" src="assets/img/logo.png" ></a>        
                <li><a href="index.php">Inicio</a></li>
                <li><a href="atualizacoes.php">Atualizações</a>
                </li>
                <li><a href="tratamentos.php">Tratamentos</a></li>
                <li>Consultas
                    <ul>
                        <li><a href="
                        <?php
                        session_start();
                        if(empty($_SESSION['login'])){
                           echo 'escolha.php';
                        }else{
                          echo 'novaconsulta.php';
                        }
                        ?>">Nova Consulta</a></li>
                        <li><a href="<?php
                        if(empty($_SESSION['login'])){
                           echo 'escolha.php';
                        }else{
                          echo 'perfil.php';
                        }
                        ?>">Minhas Consultas</a></li>
                    </ul>
                </li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                
                    <div id="login">
                        <a href="
                        <?php
                        if(empty($_SESSION['login'])){
                           echo 'escolha.php';
                        }else{
                          echo 'perfil.php';
                        }
                        ?>"><i class="fas fa-user icone-login"></i></a>
                        <?php
                        if(empty($_SESSION['login'])){
                          
                        }else{
                          echo '<a href="sair.php"><i class="fas fa-sign-out-alt icone-login"></i></a>';
                        }
                        ?>
                        
                    </div>
            </ul>
    </nav>
