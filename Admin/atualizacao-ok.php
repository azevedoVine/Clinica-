<?php
    include_once "assets/classes/atualizacoes/atualizacao.php";
    include_once "assets/classes/atualizacoes/atualizacaoDao.php";


if (isset($_POST['titulo']) && $_POST['texto'] != "" 
        && isset($_POST['descricao']) != "") 

{

    $atualizacao = new Atualizacao();
    $atualizacao->setTitulo($_POST['titulo']);
    $atualizacao->setTexto($_POST['texto']);
    $atualizacao->setDescricao($_POST['descricao']);
    

    $atualizacaoDao = new AtualizacaoDao();
    $atualizacaoDao->novaAtualizacao($atualizacao);
}

var_dump($atualizacao);

?>