<?php include_once "topo.php";
    include_once "assets/classes/atualizacoes/atualizacao.php";
    include_once "assets/classes/atualizacoes/atualizacaoDao.php";

if (isset($_POST['titulo']) && $_POST['texto'] != "") {    

    $atualizacao = new Atualizacao();
    $atualizacao->setIdAtualizacao($_POST['id']);
    $atualizacao->setTitulo($_POST['titulo']);
    $atualizacao->setTexto($_POST['texto']);
    $atualizacao->setDescricao($_POST['descricao']);
    $atualizacao->setPublicacao($_POST['publicacao']);


    $atualizacaoDao = new AtualizacaoDao();
    $mensagem=$atualizacaoDao->editaAtualizacao($atualizacao);

    }else{
        $mensagem = "Por favor, preencha os campos obrigatórios";
    }
    
?>

    <div class="tabela">
    <h1><?php echo $mensagem ?></h1>
    <a href="atualizacao.php"><button class="botao-nova">Voltar</a>
    </div>

<?php include_once "footer.php";
?>