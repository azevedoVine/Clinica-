<?php
    session_start();
    echo $_SESSION['login'];

    if($_SESSION['login']= ""){
        header("Location:erro.php");
    }

?>