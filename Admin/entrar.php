<?php
    session_start();

    if($_SESSION['login'] == NULL){
        header("Location:erro.php");
    }

?>