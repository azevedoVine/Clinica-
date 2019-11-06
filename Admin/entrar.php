<?php
    session_start();
    var_dump($_SESSION['login']);

    if($_SESSION['login'] == NULL){
        header("Location:erro.php");
    }

?>